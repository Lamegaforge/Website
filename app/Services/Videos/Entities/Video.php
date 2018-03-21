<?php

namespace App\Services\Videos\Entities;

class Video extends AbstractEntity
{
    protected $attributes = [
        'id' => null,
        'channel_id' => null,
        'title' => null,
        'published_at' => null,
        'description' => null,
        'view' => null,
        'like' => null,
        'dislike' => null,
    ];
}
