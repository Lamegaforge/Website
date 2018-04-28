<?php

namespace App\Services;

use File;
use App\Models\User;
use Illuminate\Http\UploadedFile;

class UserService
{
    protected $imageService;
    protected $config;

    public function __construct(ImageService $imageService, array $config)
    {
        $this->imageService = $imageService;
        $this->config = $config;
    }

    public function refreshAvatar(User $user, UploadedFile $file)
    {
        $config = $this->config['images']['avatar'];

        $this->upload($file, $user, $config);
    }

    public function refreshBanner(User $user, UploadedFile $file)
    {
        $config = $this->config['images']['banner'];

        $this->upload($file, $user, $config);
    }

    protected function upload(UploadedFile $file, User $user, array $imagesParamsList)
    {
        $userFilesPath = $this->getUserFilesPath($user);

        $this->imageService->createFolderIfNotExist($userFilesPath);

        foreach ($imagesParamsList as $params) {

            $params['full_path'] = $userFilesPath . $params['name'];

            $this->imageService->upload($file, $params);
        }
    }

    public function userHasAvatar(User $user)
    {
        $userAvatarPath = $this->getUserAvatarPath($user);

        return File::exists($userAvatarPath);
    }

    public function userHasBanner(User $user)
    {
        $userBannerPath = $this->getUserBannerPath($user);

        return File::exists($userBannerPath);
    }    

    public function getUserAvatarPath(User $user)
    {
        $userFilesPath = $this->getUserFilesPath($user);

        $config = $this->config['images']['avatar'][0];

        return $userFilesPath . $config['name'];
    }

    public function getMinifiedAvatarPath(User $user)
    {
        $userFilesPath = $this->getUserFilesPath($user);

        $config = $this->config['images']['avatar'][1];

        return $userFilesPath . $config['name'];
    }

    public function getUserBannerPath(User $user)
    {
        $userFilesPath = $this->getUserFilesPath($user);

        $config = $this->config['images']['banner'][0];

        return $userFilesPath . $config['name'];
    }   

    protected function getUserFilesPath(User $user)
    {
        return public_path('users' . DIRECTORY_SEPARATOR . $user->id . DIRECTORY_SEPARATOR);
    }      
}
