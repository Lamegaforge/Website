<?php

namespace App\Services\Videos;

class VideoService
{
    public function callApiWithId($id)
    {
        $result = app('Api\Youtube')->getVideoInfo($id);

        return new Responsables\Video($result);
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
