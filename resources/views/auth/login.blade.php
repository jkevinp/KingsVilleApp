@extends('user.layout.layout')

@section('content')

<div class="row">
    <h5><i class="mdi-action-account-circle"></i>User Login</h5>
</div>
<div class="row alert">
	@if (count($errors) > 0)
		<strong>Whoops</strong> There were some problems with your input.
		<ul>
			@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

					<form class="" role="form" method="POST" action="{{ url('/auth/login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<label for="email">E-Mail Address</label>
					<input type="email" class="" name="email" value="{{ old('email') }}">
					<label class="">Password</label>
					<input type="password"  name="password">
					<div class="checkbox">
						<label><input type="checkbox" name="remember"> Remember </label>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
					<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							
					
					</form>
</div>
@endsection
