@extends('guest.layout.layout')



@section('content')
<div class=" blurlogin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-offset-2">
                    <div class="intro-message">
                        <h1>Forgot Password</h1>
                        <hr class="intro-divider">
                          <div class="row alert">
                            @if (count($errors) > 0)
                              <div class='alert alert-danger'>
                                <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                                    </ul>
                                </div>
                            @endif

               <form class="form-horizontal form-group-lg form-horizontal style-form"  method="post" action="{{route('User.account.sendpassword')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group ">
                  <input type="email" placeholder="Email Address" autocomplete="off" class="form-control input-lg opacity5" name="email" value="" >
                </div>
                <div class="form-group">
                  <input type="email"  name="email1" autocomplete="off" placeholder='Confirm Email Address' class='form-control input-lg opacity5' value="">
                </div>
                                <br/>
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                  <div class="btn-group" role="group">
                       <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                    <div class="btn-group" role="group">
                            <a class="btn btn-warning btn-lg" href="{{route('auth.login')}}">Cancel</a>
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