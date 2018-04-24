<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdateUserInformationsRequest;
use App\Http\Requests\UpdateUserMediasRequest;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use App\Services\UserService;


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
        $this->update($request->all(), $id);

        return \Redirect::route('auth.user.edit', ['user_id' => $id]);
    }   

    public function updatePassword(UpdateUserPasswordRequest $request, $id)
    {
        $this->update($request->all(), $id);

        return redirect('auth.user.edit', [$id]);        
    }

    public function updateMedias(UpdateUserMediasRequest $request, $id)
    {
        $user = $this->userRepository->find($id);

        if ($request->avatar) {
            app(UserService::class)->refreshAvatar($user, $request->avatar);
        }

        if ($request->banner) {
            app(UserService::class)->refreshBanner($user, $request->banner);
        }        

        return \Redirect::route('auth.user.edit', ['user_id' => $id]);     
    }

    protected function update($params, $id)
    {
        $user = $this->userRepository->find($id);

        $user->update($params);
    }
}
