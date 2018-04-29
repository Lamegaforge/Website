@if(app(\App\Services\UserService::class)->userHasAvatar(auth()->user()))
<img src="{{'/users/' . auth()->user()->id . '/minified_avatar.png'}}" alt=""> 
@else
<img src="" alt=""> 
@endif