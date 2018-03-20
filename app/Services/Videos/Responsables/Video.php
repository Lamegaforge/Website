<?php

namespace App\Services\Videos\Responsables;

use App\Services\Videos\Contracts\Responsable,

class Video implements Responsable
{
    protected $video;

    public function __construct(array $video)
    {
        $this->video = $video;
    }
    
    public function handle()
    {
        return [
            'id' => $this->video->id,
            'channel_id' => $this->video->snippet->channelId,
            'title' => $this->video->snippet->title,
            'published_at' => $this->video->snippet->publishedAt,
            'description' => $this->video->snippet->description,
            'statistics' => [
                'view' => $this->video->statistics->viewCount,
                'like' => $this->video->statistics->likeCount,
                'dislike' => $this->video->statistics->dislikeCount,
            ]
        ];
    }
}