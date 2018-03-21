<?php

namespace App\Services\Videos;

class VideoService
{
    public function findWithApi($id)
    {
        $apiResponse = app('Api\Youtube')->getVideoInfo($id);

        if (! $apiResponse) {
            throw new InvalidApiResponseException();
        }

        $formatedResponse = $this->formatResponseApi($apiResponse);

        return new Entities\Video($formatedResponse);
    }
    
    public function getLastByChannelWithApi($id, $limit = 5)
    {
        $apiResponseList = app('Api\Youtube')->getVideoInfo($id);

        if (! $apiResponseList) {
            throw new InvalidApiResponseException();
        }

        return array_map(function($apiResponse){

            $formatedResponse = $this->formatResponseApi($apiResponse);

            return new Entities\Video($formatedResponse);

        }, $apiResponseList);
    }

    protected function formatResponseApi($video)
    {
        return [
            'id' => $video->id,
            'channel_id' => $video->snippet->channelId,
            'title' => $video->snippet->title,
            'published_at' => $video->snippet->publishedAt,
            'description' => $video->snippet->description,
            'view' => $video->statistics->viewCount,
            'like' => $video->statistics->likeCount,
            'dislike' => $video->statistics->dislikeCount,
        ];
    }
}


