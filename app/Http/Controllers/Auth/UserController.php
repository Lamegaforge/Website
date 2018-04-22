<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
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

    public function edit(Request $request, $id)
    {
        $user = $this->userRepository->find($id);

        return view('auth.user.edit', ['user' => $user]);
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
        $user = $this->userRepository->find($id);

        $fileName = app(UserService::class)->refreshAvatar($user, $request->file);

        $this->update(['avatar' => $fileName]);

        return redirect('auth.user.edit', [$id]);        
    }

    public function updateBanner(UpdateUserBannerRequest $request, $id)
    {
        $fileName = app(UserService::class)->refreshBanner($request->file);

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
