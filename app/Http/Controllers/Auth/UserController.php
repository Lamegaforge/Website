<?php

namespace App\Http\Controllers\Auth;

use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function edit(UpdateUserRequest $request, $id)
    {
        $user = $this->userRepository->find($id);

        return view('auth.user.edit', [$id]);
    } 

    public function updateInformations(UpdateUserInformationsRequest $request, $id)
    {
        $this->update($request->all());

        return redirect('auth.user.edit', [$id]);
    }   

    public function updatePassword(UpdateUserPasswordRequest $request, $id)
    {
        $this->update($request->all());

        return redirect('auth.user.edit', [$id]);        
    }

    public function updateAvatar(UpdateUserAvatarRequest $request, $id)
    {
        $fileName = app(UserService::class)->upload($request->file);

        $this->update(['avatar' => $fileName]);

        return redirect('auth.user.edit', [$id]);        
    }

    public function updateBanner(UpdateUserBannerRequest $request, $id)
    {
        $fileName = app(UserService::class)->upload($request->file);

        $this->update(['banner' => $fileName]);

        return redirect('auth.user.edit', [$id]);        
    }

    protected function update(array $params, $id)
    {
        $user = $this->userRepository->find($id);

        $user->update($params);

        $user->save();        
    }
}
