@extends('layouts.base')

@section('breadcrumbs')
  <section class="bg-primary">
    <div class="container">
      <h3 class="text-white font-weight-300 m-b-0">Modification du compte</h3>
    </div>
  </section>

<section class="breadcrumbs">
<div class="container">
  <ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/">User</a></li>
    <li class="active">edit</li>
  </ol>
</div>
</section>
@endsection

@section('content') 
<section>
<div class="container">
    <div class="row m-t-15">
        <div class="col-lg-4 col-md-6 col-xs-12">
            <form method='post' action="{{route('auth.user.update', [$user])}}">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informations personnelles</h5>
                    </div>
                    <div class="card-block">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Name</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name='name' value='{{$user->name}}'>
                            </div>
                            <small id="emailHelp" class="form-text">Enter your username wich will be display on frontpage.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Email</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="email" name='email' value='{{$user->email}}'>
                            </div>
                            <small id="emailHelp" class="form-text">Enter your username wich will be display on frontpage.</small>
                        </div>    
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">https://facebook.com/</span>
                                <input type="text" class="form-control" id="basic-url" placeholder="nickname" aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">https://twitter.com/</span>
                                <input type="text" class="form-control" id="basic-url" placeholder="nickname" aria-describedby="basic-addon3">
                            </div>
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
                        <div class="form-group">
                            <label for="exampleInputUsername1">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="password" name='name' value=''>
                            </div>
                            <small id="emailHelp" class="form-text">Enter your username wich will be display on frontpage.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Password validation</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="password validation" name='email' value=''>
                            </div>
                            <small id="emailHelp" class="form-text">Enter your username wich will be display on frontpage.</small>
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
                        <div class="form-group">
                            <label for="exampleInputUsername1">Avatar</label>
                            <div class="input-group">
                                <input class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" type="file" name='avatar'>
                            </div>
                            <small id="emailHelp" class="form-text">
                                <img src='https://yakuthemes.com/gameforest/img/user/avatar-sm.jpg'>
                                <a href=''>Supprimer image existante</a>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Banniere</label>
                            <div class="input-group">
                                <input class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" type="file" name='banner'>
                            </div>
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

@section('scripts')

@endsection