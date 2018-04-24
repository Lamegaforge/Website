<?php

namespace App\Services;

use Image;
use Illuminate\Http\UploadedFile;

class ImageService
{
    public function upload(UploadedFile $file, array $params)
    {
        \Image::make($file->getRealPath())
            ->resize($params['sizes'][0], $params['sizes'][1])
            ->save($params['full_path']);
    }
}
