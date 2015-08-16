@extends('user.layout.layout')

@section('title')
    KingsVille User Account Create Successful
@stop

@section('content')
        <div class="row mt">
               <h2 class="center violet"><i class="mdi-action-account-circle"></i> User Successfully Created</h2>
        </div>
        <div class="row mt">
          <div class="col-md-10 col-md-offset-1">
          <div class="content-panel center">
             <h5><i class="mdi-navigation-check"></i>The new user record has been successfully created.</h5>
             <h5>A verification email has been sent to the given email address. Verify your email and create your account to get access in the system.</h5>
             <br/>
             <br/>
             <br/>
           
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                  <div class="btn-group" role="group">
                      <a href="{{URL::route('User.account.verify' , $user->linktoken)}}" class="btn btn-large btn-theme btn-lg"><i class="mdi-navigation-arrow-back left"></i>Verify Now!</a>
                
                  </div>
                  <div class="btn-group" role="group">
                      <a href="{{URL::route('User.index')}}" class="btn btn-large btn-theme btn-lg"><i class="mdi-navigation-arrow-back left"></i>Go back to User List</a>
                
                  </div>
              
              </div>
           </div>
         </div>
        </div>
@stop