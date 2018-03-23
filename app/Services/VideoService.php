<?php

namespace App\Services;

use App\Exceptions\InvalidApiResponseException;

class VideoService
{
    public function findWithApi($youtubeId)
    {
        $apiResponse = app('Api\Youtube')->getVideoInfo($youtubeId);

        if (! $apiResponse) {
            return null;
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
            'youtube_id' => $response->id,
            'channel_video_id' => $response->snippet->channelId,
            'title' => $response->snippet->title,
            'published_at' => $response->snippet->publishedAt,
            'description' => $response->snippet->description,
            'view_count' => $response->statistics->viewCount,
            'like_count' => $response->statistics->likeCount,
            'dislike_count' => $response->statistics->dislikeCount,
        ];
    }
}
