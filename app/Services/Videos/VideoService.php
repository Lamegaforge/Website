<?php

namespace App\Services\Videos;

class VideoService
{
    public function findWithApi($id)
    {
        $apiVideo = app('Api\Youtube')->getVideoInfo($id);

        if (! $apiVideo) {
            throw new InvalidApiResponseException();
        }

        $this->formatResponseApi($apiVideo);

        // return new Responsables\Video($result);
    }
    
    public function getLastByChannelWithApi($id, $limit = 5)
    {
        $apiVideos = app('Api\Youtube')->getVideoInfo($id);

        if (! $apiVideos) {
            throw new InvalidApiResponseException();
        }

        return array_map(function($apiVideo){
            return $this->formatResponseApi($apiVideo);
        }, $apiVideos);
    }

    protected function formatResponseApi($video)
    {
        return [
            'id' => $video->id,
            'channel_id' => $video->snippet->channelId,
            'title' => $video->snippet->title,
            'published_at' => $video->snippet->publishedAt,
            'description' => $video->snippet->description,
            'statistics' => [
                'view' => $video->statistics->viewCount,
                'like' => $video->statistics->likeCount,
                'dislike' => $video->statistics->dislikeCount,
            ]
        ];
    }
}
