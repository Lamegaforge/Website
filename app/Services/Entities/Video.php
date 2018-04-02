<?php

namespace App\Services\Entities;

class Video extends AbstractEntity
{
    protected $attributes = [
        'hash' => null,
        'title' => null,
        'duration' => null,
        'published_at' => null,
        'description' => null,
        'view_count' => null,
        'like_count' => null,
        'dislike_count' => null,
    ];
}
