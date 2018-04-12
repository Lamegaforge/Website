<?php

namespace App\Managers\Video\Drivers;

use DateTime;
use App\Entities;
use DateInterval;
use Carbon\Carbon;
use App\Managers\Video\Contracts\Driver;

class Client implements Driver
{
    protected $config;
    protected $client;

    public function __construct(array $config, $client)
    {
        $this->config = $config;
        $this->client = $client;
    }

    public function find($hash)
    {
        $response = $this->client->getVideoInfo($hash);

        if (! $response) {
            return null;
        }

        return new Entities\Video($this->formatGetVideoInfoResponse($response));        
    }

    public function findByChannel($hash, $limit = 50)
    {
        $responseList = $this->client->listChannelVideos($hashChannel, $limit, 'date');

        if (! $responseList) {
            return null;
        }

        return array_map(function($response){

            return new Entities\Video($this->formatListChannelVideoResponse($response));

        }, $responseList);
    }

    protected function formatGetVideoInfoResponse($response)
    {
        $duration = new DateInterval($response->contentDetails->duration);

        return [
            'hash' => $response->id,
            'view_count' => $response->statistics->viewCount,
            'like_count' => $response->statistics->likeCount,
            'dislike_count' => $response->statistics->dislikeCount,  
            'duration' => $duration->format('%i:%S'),       
        ] + $this->formatBaseResponseApi($response);
    }

    protected function formatListChannelVideoResponse($response)
    {
        return [
            'hash' => $response->id->videoId
        ] + $this->formatBaseResponseApi($response);
    }

    protected function formatBaseResponseApi($response)
    {
        $publishedAt = new DateTime($response->snippet->publishedAt);

        return [
            'title' => $response->snippet->title,
            'published_at' => $publishedAt->format('Y-m-d'),
            'description' => $this->formatDescription($response->snippet->description),
        ];
    }

    protected function formatDescription($description)
    {
        preg_match('^(.+?)-{5,}^s', $description, $matches);

        if (! isset($matches[1])) {
            return $description;
        }

        return $matches[1];
    }
}
