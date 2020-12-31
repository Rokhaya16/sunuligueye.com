@extends('layouts.auth')

@section('content')
<div class="container" style="margin-top: 100px;">
    <form id="register" method="post" action="{{ route('register') }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-body">
                    <div class="text-center">
                        <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                        <h5 class="content-group">Create an account <small class="display-block">All fields are required</small></h5>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="name" id="name" placeholder="username" value="{{ old('name') }}" required>
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Adresse Email" value="{{ (isset($user_data['email'])) ? $user_data['email'] : old('email') }}" required{{ isset($user_data['email']) ? ' disabled' : '' }}>
                        <div class="form-control-feedback">
                            <i class="icon-mail5 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>
    <div class="form-group row">
        <div class="col-md-4">Je veux être :</div>
        <label for="freelance" class="col-md-4 col-form-label text-md-right">Freelance
            <input type="radio" value="1" id="freelance" name="role_id">
            <span class="checkmark"></span>
        </label>
        <label for="client" class="col-md-4 col-form-label text-md-right">Client
            <input type="radio" value="2" id="client" name="role_id">
            <span class="checkmark"></span>
        </label>
    </div>
    @error('role_id')
        <span class="text-red-400 text-sm block">{{ $message }}</span>
    @enderror

                    <div class="mt-30">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('login') }}" class="btn btn-link text-left">Dejà un compte?</a>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button type="submit" class="btn bg-teal-400">Créer un compte</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection

@section('plugin-scripts')
    <script src="{{ asset('assets/js/plugins/validation/validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/uniform.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/custom/pages/validation.js') }}"></script>
    <script src="{{ asset('assets/js/custom/pages/auth.js') }}"></script>
@endsection