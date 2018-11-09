@extends('auth.page')
@section('auth_content')
	<h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45">{{ __('LOGIN') }}</h1>
	<form method="POST" action="{{ route('login') }}" class="brk-form brk-form-strict maxw-570">
		@csrf
		<input id="email_input" type="email" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autofocus />
		@if ($errors->has('email'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
		@endif
		<input id="password_input" type="password" placeholder="{{ __('Password') }}" name="password" required />
		@if ($errors->has('password'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
		@endif
		<div class="mb-30 d-flex flex-wrap justify-content-between">
			<button class="btn-backgrounds btn-backgrounds btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center mt-30 mr-10" type="submit">Login Now <span class="before"><i class="far fa-hand-point-right"></i></span>
			</button>
			<a href="{{ route('register') }}" class="btn-backgrounds btn-backgrounds_no-icon btn-backgrounds btn-backgrounds_white mt-30 btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center">Register</a>
		</div>
		<div class="pl-10">
			<label class="brk-form-checkbox">
				<input id="checkbox-strict-1" name="remember" type="checkbox" checked="{{ old('remember') ? 'checked' : '' }}" class="rendered">
				<span class="checkbox-custom">
					<i class="fa fa-check" aria-hidden="true"></i>
				</span>
			</label>
			<label class="brk-form-checkbox-label" for="checkbox-strict-1">{{ __('Remember Me') }}</label>
		</div>
	</form>
@endsection