<?php

namespace App\Services;

class ImageService
{
    protected $imageManager;

    public function __construct(ImageManager $imageManager)
    {
        $this->imageManager = $imageManager;
    }

    public function upload($file)
    {
        $img = $this->imageManager->make($file);

        $img->fit(300, 200);

        $img->save('foo/bar.jpg');
    }

    protected function getFolderName($path)
    {
        return storage_path(config('image.banner.path'));
    }
}
