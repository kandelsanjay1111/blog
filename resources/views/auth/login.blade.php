@extends('user.app')
@section('heading','Log in Here')
@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('main-contents')
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="panel panel-default">
                <div class="panel-heading mb-4"><h3 class="text-center">User Login</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="row">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="row">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>
 
                                @if ($errors->has('password'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" value="{{ old('remember') ? 'checked' : '' }}"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a href="{{route('register')}}" class="btn btn-primary">Register</a>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
