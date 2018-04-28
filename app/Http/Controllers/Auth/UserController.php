<?php

namespace App\Http\Controllers\Auth;

use Redirect;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserMediasRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use App\Http\Requests\UpdateUserInformationsRequest;

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

        return Redirect::route('auth.user.edit', ['user_id' => $id])->with('success', 'Success');
    }   

    public function updatePassword(UpdateUserPasswordRequest $request, $id)
    {
        $this->update($request->all(), $id);

        return Redirect::route('auth.user.edit', ['user_id' => $id])->with('success', 'Success');    
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

        return Redirect::route('auth.user.edit', ['user_id' => $id])->with('success', 'Success');  
    }

    protected function update($params, $id)
    {
        $user = $this->userRepository->find($id);

        $user->update($params);
    }
}
