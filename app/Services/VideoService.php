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

        $formatedResponse = $this->formatGetVideoInfoResponse($apiResponse);

        return new Entities\Video($formatedResponse);
    }

    public function getLastByChannelWithApi($youtubeChannelId, $limit = 5)
    {
        $apiResponseList = app('Api\Youtube')->listChannelVideos($youtubeChannelId, $limit, 'date');

        if (! $apiResponseList) {
            return null;
        }

        return array_map(function($apiResponse){

            $formatedResponse = $this->formatListChannelVideoResponse($apiResponse);

            return new Entities\Video($formatedResponse);

        }, $apiResponseList);
    }

    protected function formatGetVideoInfoResponse($response)
    {
        return [
            'hash' => $response->id,
            'view_count' => $response->statistics->viewCount,
            'like_count' => $response->statistics->likeCount,
            'dislike_count' => $response->statistics->dislikeCount,            
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
        return [
            'title' => $response->snippet->title,
            'published_at' => $response->snippet->publishedAt,
            'description' => $response->snippet->description,
        ];
    }
}
