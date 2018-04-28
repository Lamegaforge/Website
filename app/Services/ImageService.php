<?php

namespace App\Services;

use File;
use User;
use Image;
use Illuminate\Http\UploadedFile;

class ImageService
{
    public function upload(UploadedFile $file, array $params)
    {
        Image::make($file->getRealPath())
            ->resize($params['sizes'][0], $params['sizes'][1])
            ->save($params['full_path']);
    }

    public function createFolderIfNotExist($path)
    {
        File::exists($path) or File::makeDirectory($path);
    }
}
