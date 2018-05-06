@extends('layouts.base')

@section('highlight')
<section class="bg-primary">
    <div class="container">
        <h3 class="text-white font-weight-300 m-b-0">Modification du compte</h3>
    </div>
</section>
@endsection

@section('breadcrumbs')
<section class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="{{route('user.show', [$user])}}">User</a></li>
            <li class="active">edit</li>
        </ol>
    </div>
</section>
@endsection

@section('content') 
<section>
<div class="container">
    <h5>Édition de l'utilisateur</h5>
    <p>Ici tu peux éditer tout ce qui concerne ton compte, évite d'upload du cul stp.</p>
    <div class="row m-t-15">
        <div class="col-lg-12">
        @if($errors->hasBag())
        <div class="alert alert-danger" role="alert">
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            <strong>Well done!</strong> {{Session::get('success')}}
        </div>
        @endif        
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <form method='post' action="{{route('auth.user.update', [$user])}}">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informations personnelles</h5>
                    </div>
                    <div class="card-block">
                        <div class="form-group @if($errors->first('name')) has-danger @endif">
                            <label for="exampleInputUsername1">Name</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name='name' value='{{$user->name}}'>
                            </div>
                            @if($errors->first('name'))
                                <small class="form-text">{{$errors->first('name')}}</small>
                            @endif
                        </div>
                        <div class="form-group @if($errors->first('email')) has-danger @endif">
                            <label for="exampleInputUsername1">Email</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="email" name='email' value='{{$user->email}}'>
                            </div>
                            @if($errors->first('email'))
                                <small class="form-text">{{$errors->first('email')}}</small>
                            @endif
                        </div>    
                        <div class="form-group @if($errors->first('facebook')) has-danger @endif">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">https://facebook.com/</span>
                                <input type="text" class="form-control" id="basic-url" placeholder="nickname" name='facebook' value='{{$user->facebook}}'>
                            </div>
                            @if($errors->first('facebook'))
                                <small class="form-text">{{$errors->first('facebook')}}</small>
                            @endif                            
                        </div>
                        <div class="form-group @if($errors->first('twitter')) has-danger @endif">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">https://twitter.com/</span>
                                <input type="text" class="form-control" id="basic-url" placeholder="nickname" name='twitter' value='{{$user->twitter}}'>
                            </div>
                            @if($errors->first('twitter'))
                                <small class="form-text">{{$errors->first('twitter')}}</small>
                            @endif                            
                        </div>  
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <form method='post' action="{{route('auth.user.update_password', [$user])}}">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Password</h5>
                    </div>
                    <div class="card-block">
                        <div class="form-group @if($errors->first('password')) has-danger @endif">
                            <label for="exampleInputUsername1">Password</label>
                            <div class="input-group @if($errors->first('password')) has-danger @endif">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="password" class="form-control" id="exampleInputName1" placeholder="password" name='password'>
                            </div>
                            @if($errors->first('password'))
                                <small class="form-text">{{$errors->first('password')}}</small>
                            @endif                            
                        </div>
                        <div class="form-group @if($errors->first('password_confirmation')) has-danger @endif">
                            <label for="exampleInputUsername1">Password confirmation</label>
                            <div class="input-group @if($errors->first('password_confirmation')) has-danger @endif">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="password" class="form-control" id="exampleInputUsername1" placeholder="password confirmation" name='password_confirmation'>
                            </div>
                            @if($errors->first('password_confirmation'))
                                <small class="form-text">{{$errors->first('password_confirmation')}}</small>
                            @endif   
                        </div>    
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                    </div>
                </div>
            </form>
        </div>        
        <div class="col-lg-4 col-md-6 col-xs-12">
            <form method='post' action="{{route('auth.user.update_medias', [$user])}}" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Medias</h5>
                    </div>
                    <div class="card-block">
                        <div class="form-group @if($errors->first('avatar')) has-danger @endif">
                            <label for="exampleInputUsername1">Avatar</label>
                            <div class="input-group">
                                <input class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" type="file" name='avatar'>
                            </div>
                            @if($errors->first('avatar'))
                                <small class="form-text">{{$errors->first('avatar')}}</small>
                            @endif                                
                            @if(app(\App\Services\UserService::class)->userHasAvatar($user))
                            <small class="form-text text-muted">
                                <img src="/users/{{$user->id}}/minified_avatar.png">
                                <a href="{{route('auth.user.destroy_avatar', ['user_id' => $user->id])}}"> Supprimer avatar</a>
                            </small>
                            @endif
                        </div>
                        <div class="form-group @if($errors->first('banner')) has-danger @endif">
                            <label for="exampleInputUsername1">Banniere</label>
                            <div class="input-group">
                                <input class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" type="file" name='banner'>
                            </div>
                            @if($errors->first('banner'))
                                <small class="form-text">{{$errors->first('banner')}}</small>
                            @endif                                
                            @if(app(\App\Services\UserService::class)->userHasBanner($user))
                            <small class="form-text text-muted">
                                <img src="/users/{{$user->id}}/minified_banner.png">
                                <a href="{{route('auth.user.destroy_banner', ['user_id' => $user->id])}}"> Supprimer banniere</a>
                            </small>
                            @endif                            
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                    </div>
                </div>
            </form>
        </div>    
    </div>
</div>
</section>
@endsection  
