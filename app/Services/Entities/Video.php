<?php

namespace App\Services\Entities;

class Video extends AbstractEntity
{
    protected $attributes = [
        'youtube_id' => null,
        'channel_video_id' => null,
        'title' => null,
        'published_at' => null,
        'description' => null,
        'view_count' => null,
        'like_count' => null,
        'dislike_count' => null,
    ];
}
