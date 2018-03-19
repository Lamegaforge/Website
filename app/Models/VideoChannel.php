<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoChannel extends Model
{
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
