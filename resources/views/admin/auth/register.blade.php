@extends('user.app')
@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('main-contents')
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h2>User Registration</h2></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="row">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>

                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <div class="row">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-8">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="row">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
