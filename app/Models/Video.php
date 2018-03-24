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
        'view',
        'like',
        'dislike',
    ];	

    public function channel()
    {
        return $this->belongsTo(VideoChannel::class);
    }
}
