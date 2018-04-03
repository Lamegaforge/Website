@extends('layouts.base')

@section('content')
    <section class="bg-image bg-image-sm" style="background-image: url('img/bg/bg-login.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-4 mx-auto">
                    <div class="card m-b-0">
                        <div class="card-header">
                            <h4 class="card-title"><i class="fa fa-sign-in"></i> Login to your account</h4>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group input-icon-left m-b-10{{ $errors->has('username') ? ' has-error' : '' }}"">
                                    <i class="fa fa-user"></i>
                                    <input type="text" class="form-control form-control-secondary" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>
                                </div>
                                <div class="form-group input-icon-left m-b-15{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" class="form-control form-control-secondary" placeholder="Password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label class="custom-control custom-checkbox custom-checkbox-primary">
                                    <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Remember me</span>
                                </label>
                                <button type="submit" class="btn btn-primary btn-block m-t-10">Login <i class="fa fa-sign-in"></i></button>
                                <div class="divider">
                                    <span>Don't have an account?</span>
                                </div>
                                <a class="btn btn-secondary btn-block" href="register.html" role="button">Register</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
