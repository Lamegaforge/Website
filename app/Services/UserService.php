<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

class UserService
{
    protected $imageManager;
    protected $config;

    public function __construct(ImageManager $imageManager, array $config)
    {
        $this->imageManager = $imageManager;
        $this->config = $config;
    }

    public function refreshAvatar(User $user, $file)
    {
        $path = $this->getFolderPath($user, config('image.avatar.path'));

        $sizes = config('image.avatar.size');

        return $this->upload($file, $path, $sizes);
    }

    public function refreshBanner(User $user, $file)
    {
        $path = $this->getFolderPath($user, config('image.banner.path'));

        $sizes = config('image.banner.size');

        return $this->upload($file, $path, $sizes);
    }

	protected function upload($file, $path, $sizes)
	{
        $this->imageManager->upload($file, $path, $sizes);
	}

    protected function getFolderPath(User $user, $path)
    {
        return storage_path($path . '/' . $user->id);
    }
}
