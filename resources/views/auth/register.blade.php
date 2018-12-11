@extends('auth.page')

@section('auth_content')
    <h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45">{{ __('Register') }}</h1>
    <form method="POST" action="{{ route('login') }}" class="brk-form brk-form-strict maxw-570">
        @csrf
        <div class="form-group row">
            <div class="col-12 col-md-6">
                <input id="first_name_input" type="text" name="first_name" placeholder="{{ __('First Name') }}" value="{{ old('first_name') }}" required autofocus />
            </div>
            <div class="col-12 col-md-6">
                <input id="last_name_input" type="text" name="last_name" placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" required autofocus />
            </div>
            <div class="col-12">
                @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
                @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12 col-md-6">
                <input id="username_input" type="text" name="username" placeholder="{{ __('Username') }}" value="{{ old('username') }}" required autofocus>
            </div>
            <div class="col-12 col-md-6">
                <input id="email" type="email" name="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>
            </div>
            <div class="col-12">
                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        
        
        
        
        
        
        
        <input id="password" type="password" placeholder="{{ __('Password') }}"  name="password" required>
        <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <div class="mb-30 d-flex flex-wrap justify-content-between">
            <button class="btn-backgrounds btn-backgrounds btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center mt-30 mr-10" type="submit">Register <span class="before"><i class="far fa-hand-point-right"></i></span>
            </button>
            <a href="{{ route('login') }}" class="btn-backgrounds btn-backgrounds_no-icon btn-backgrounds btn-backgrounds_white mt-30 btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center">Login</a>
        </div>
        <div class="pl-10 d-flex">
            <label class="brk-form-checkbox">
                <input id="checkbox-strict-1" name="remember" type="checkbox" checked="{{ old('remember') ? 'checked' : '' }}" />
                <span class="checkbox-custom">
					<i class="fa fa-check" aria-hidden="true"></i>
				</span>
            </label>
            <label class="brk-form-checkbox-label" for="checkbox-strict-1">{{ __('Remember Me') }}</label>
        </div>
    </form>

@endsection
