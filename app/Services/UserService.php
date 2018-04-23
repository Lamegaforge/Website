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
        // plusieurs taille à créer ?
        $path = $this->getFolderPath($user, $this->config['avatar.path']);

        $sizes = $this->config['avatar.size'];

        return $this->upload($file, $path, $sizes);
    }

    public function refreshBanner(User $user, $file)
    {
        $path = $this->getFolderPath($user, $this->config['banner.path']);

        $sizes = $this->config['baner.size'];

        return $this->upload($file, $path, $sizes);
    }

    protected function upload($file, $path, $sizes)
    {
        $this->imageManager->upload($file, $path, $sizes);
    }

    protected function getFolderPath(User $user, $path)
    {
        // storage/user_id/banner.jpg
        // storage/user_id/avart.jpg
        return storage_path($path . '/' . $user->id);
    }
}
