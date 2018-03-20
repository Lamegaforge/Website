<?php

namespace App\Services;

class VideoService
{
    public function callApiWithId($id)
    {
        $result = app('Api\Youtube')->getVideoInfo($id);

        return $this->formatResponseApi($result);
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
