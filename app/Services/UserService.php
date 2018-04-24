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

        $this->createUserFilesFolder($userFilesPath);

        foreach ($imagesParamsList as $params) {

            $params['full_path'] = $userFilesPath . DIRECTORY_SEPARATOR . $params['name'];

            $this->imageService->upload($file, $params);
        }
    }

    protected function createUserFilesFolder($path)
    {
        if (File::exists($path)) {
            return;
        }
        
        File::makeDirectory($path);
    }

    protected function getUserFilesPath(User $user)
    {
        $path = $this->config['images']['path'];

        return storage_path($path . DIRECTORY_SEPARATOR . $user->id);
    }
}
