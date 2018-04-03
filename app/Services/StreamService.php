<?php

namespace App\Services;

use Cache;
use Config;
use GuzzleHttp\Client;
use App\Services\Entities;

class StreamService
{
    const STREAM_SAVED = 'stream';

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
    public function saveStream(Entities\Stream $streamEntity)
    {
        Cache::forever(StreamService::STREAM_SAVED, $streamEntity);
    }

    /**
     * @return void
     */
    public function removeSavedStream()
    {
        Cache::forget(StreamService::STREAM_SAVED);        
    }

    /**
     * @param  string $slugName
     * @return mixed
     */
    public function callTwitchApi($slugName)
    {
        $client = new Client;

        $link = config('api.twitch.url') .
            'streams/' .
            $slugName .
            '?client_id=' . config('api.twitch.key');

        $result = $client->request('GET', $link);

        $result = json_decode($result->getBody()->getContents(), true);

        if (! $result['stream']) {
            return null;
        }

        $params = [
            'name' => $result['stream']['channel']['name'],
            'game' => $result['stream']['game'],
        ];

        return new Entities\Stream($params);
    }
}
