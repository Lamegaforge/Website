<?php

namespace App\Services;

use Config;
use GuzzleHttp\Client;
use App\Services\Entities;
use App\Repositories\videoChannelRepository;

class StreamService
{
    const STREAM_SAVED = 'stream';

    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config['stream'];
    }

    /**
     * @return boolean
     */
    public function isOnline()
    {
        return Cache::has(StreamService::STREAM_SAVED);
    }

    /**
     * @return \App\Services\Entities\Stream
     */
    public function getSavedStream()
    {
        return Cache::get(StreamService::STREAM_SAVED);
    }

    /**
     * @param \App\Services\Entities\Stream;
     * @return void
     */
    protected function saveStream(Entities\Stream $streamEntity)
    {
        Cache::forever(StreamService::STREAM_SAVED, $streamEntity);
    }

    /**
     * @return void
     */
    protected function removeSavedStream()
    {
        Cache::forget(StreamService::STREAM_SAVED);        
    }

    public function callTwitchApi($slugName)
    {
        $client = new Client;

        $link = $this->config['api_url'] .
            'streams/' .
            $slugName .
            '?client_id=' . $this->config['client_id'];

        $result = $client->request('GET', $link);

        $result = json_decode($result->getBody(), true);

        if (! $result['stream']) {
            return null;
        }

        return new Entities\Stream($result['stream']);
    }
}
