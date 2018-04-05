<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'hash',
        'video_channel_id',
        'title',
        'published_at',
        'description',
        'view_count',
        'like_count',
        'dislike_count',
        'online'
    ];	

    public function channel()
    {
        return $this->belongsTo(VideoChannel::class);
    }

    public function getPublishedAtAttribute()
    {
        $publishedAt = new \Datetime($this->attributes['published_at']);

        return $publishedAt->format('Y-m-d');
    }
}
