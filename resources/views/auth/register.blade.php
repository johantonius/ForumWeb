@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/registerform') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Phone</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
                                </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Address</label>
    
                                <div class="col-md-6">
                                    <textarea id="name" type="text" class="form-control" cols="30" rows="10" name="address" value="{{ old('address') }}" required autofocus></textarea>
                                </div>
                        </div>


                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Gender</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="radio" class="form-control" name="gender" value="Female" required autofocus>Female 
                                    <input id="name" type="radio" class="form-control" name="gender" value="Male" required autofocus>Male 
                                </div>
                        </div>

                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Date of Birth</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" required autofocus>
                                </div>
                        </div>
                        <div class="form-group{{ $errors->has('picture_path') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Profile Picture</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="file" class="form-control" name="picture_path" value="{{ old('picture_path') }}" required autofocus>
                                </div>
                        </div>
                        <div class="form-group{{ $errors->has('picture_path') ? ' has-error' : '' }}">
    
                                <div class="col-md-6">
                                    <input id="name" type="checkbox" class="form-control" name="picture_path" value="{{ old('picture_path') }}" required autofocus>
                                </div>
                                <label for="name" class="col-md-4 control-label">Agreement</label>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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
