<?php

namespace App\Services;

use Cache;
use Config;
use App\Services\Entities;
use GuzzleHttp\ClientInterface;
use App\Repositories\StreamRepository;

class StreamService
{
    const STREAM_SAVED = 'stream';

    protected $stream;
    protected $client;
    protected $cache;
    protected $config;

    public function __construct(StreamRepository $stream, ClientInterface $client, $cache, array $config)
    {
        $this->stream = $stream;
        $this->client = $client;
        $this->cache = $cache;
        $this->config = $config;
    }

    /**
     * @return void
     */
    public function refreshSavedStream()
    {
        $selectedStream = $this->stream->getSelected();

        $streamEntity = $this->callTwitchApi($selectedStream->slug_name);

        if (! $streamEntity) {
            $this->removeSavedStream();
            return;
        }

        $this->saveStream($streamEntity);
    }

    /**
     * @return boolean
     */
    public function isOnline()
    {
        return $this->cache->has(StreamService::STREAM_SAVED);
    }

    /**
     * @return \App\Services\Entities\Stream
     */
    public function getSavedStream()
    {
        return $this->cache->get(StreamService::STREAM_SAVED);
    }

    /**
     * @param \App\Services\Entities\Stream;
     * @return void
     */
    public function saveStream(Entities\Stream $streamEntity)
    {
        $this->cache->forever(StreamService::STREAM_SAVED, $streamEntity);
    }

    /**
     * @return void
     */
    public function removeSavedStream()
    {
        $this->cache->forget(StreamService::STREAM_SAVED);        
    }

    /**
     * @param  string $slugName
     * @return mixed
     */
    public function callTwitchApi($slugName)
    {
        $link = $this->config['url'] .
            'streams/' .
            $slugName .
            '?client_id=' . $this->config['key'];

        $result = $this->client->request('GET', $link);

        $result = json_decode($result->getBody()->getContents(), true);

        if (! $result['stream']) {
            return null;
        }

        $params = $this->formatApiResponse($result);

        return new Entities\Stream($params);
    }

    /**
     * @param  array  $result
     * @return array
     */
    protected function formatApiResponse(array $result)
    {
        $template = $result['stream']['preview']['template'];

        $template = str_replace('{width}', 1280, $template);
        $template = str_replace('{height}', 720, $template);

        return [
            'name' => $result['stream']['channel']['name'],
            'status' => $result['stream']['channel']['status'],
            'game' => $result['stream']['game'],
            'template' => $template,
        ];
    }
}
