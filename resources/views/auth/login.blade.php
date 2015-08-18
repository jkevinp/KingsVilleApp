@extends('guest.layout.layout')

@section('content')
    <!-- Header -->
    <div class=" blurlogin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-offset-2">
                    <div class="intro-message">
                        <h1>User's Login</h1>
                        <hr class="intro-divider">
							<div class="row alert">
								
								<form class="form-horizontal form-group-lg" role="form" method="POST" action="{{ url(route('auth.signin'))}}" autocomplete="off">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-group ">
									<input type="email" placeholder="Email Address" autocomplete="off" required="" class="form-control input-lg opacity5" name="email" value="" >
								</div>
								<div class="form-group">
									<input type="password"  name="password" autocomplete="off" required="" placeholder='Password' class='form-control input-lg opacity5' value="">
								</div>
                                <br/>
								<div class="btn-group btn-group-justified" role="group" aria-label="...">
									<div class="btn-group" role="group">
									     <button type="submit" class="btn btn-primary btn-lg">Login</button>
									  </div>
									  <div class="btn-group" role="group">
								            <a class="btn btn-warning btn-lg" href="{{route('User.account.forgotpassword')}}">Forgot Your Password?</a>
									  </div>
								 
								</div>
								</form>
							</div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
@stop