<?php

namespace App\Services;

use App\Exceptions\InvalidApiResponseException;

class VideoService
{
    public function findWithApi($youtubeId)
    {
        $apiResponse = app('Api\Youtube')->getVideoInfo($youtubeId);

        if (! $apiResponse) {
            throw new InvalidApiResponseException();
        }

        $formatedResponse = $this->formatResponseApi($apiResponse);

        return new Entities\Video($formatedResponse);
    }
    
    public function getLastByChannelWithApi($youtubeChannelId, $limit = 5)
    {
        $apiResponseList = app('Api\Youtube')->listChannelVideos($youtubeChannelId, $limit, 'date');

        if (! $apiResponseList) {
            throw new InvalidApiResponseException();
        }

        return array_map(function($apiResponse){

            $formatedResponse = $this->formatResponseApi($apiResponse);

            return new Entities\Video($formatedResponse);

        }, $apiResponseList);
    }

    protected function formatResponseApi($response)
    {
        return [
            'id' => $response->id,
            'channel_id' => $response->snippet->channelId,
            'title' => $response->snippet->title,
            'published_at' => $response->snippet->publishedAt,
            'description' => $response->snippet->description,
            'view' => $response->statistics->viewCount,
            'like' => $response->statistics->likeCount,
            'dislike' => $response->statistics->dislikeCount,
        ];
    }
}
