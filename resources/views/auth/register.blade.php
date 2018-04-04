@extends('layouts.base')

@section('content')
    <section class="bg-image bg-image-sm" style="background-image: url('https://img.youtube.com/vi/BhTkoDVgF6s/maxresdefault.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><i class="fa fa-user-plus"></i> Register a new account</h4>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="form-group input-icon-left m-b-10{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="name" class="form-control form-control-secondary" placeholder="Identifiant" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group input-icon-left m-b-10{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <i class="fa fa-envelope"></i>
                                    <input type="email" name="email" class="form-control form-control-secondary" placeholder="Email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="divider"><span>Security</span></div>
                                <div class="form-group input-icon-left m-b-10{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name="password" class="form-control form-control-secondary" placeholder="Mot de passe" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group input-icon-left m-b-10">
                                    <i class="fa fa-unlock"></i>
                                    <input type="password" name="password_confirmation" class="form-control form-control-secondary" placeholder="Confirmation" required>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-10 btn-block">Complete Registration</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
