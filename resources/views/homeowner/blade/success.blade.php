@extends('user.layout.layout')

@section('title')
    KingsVille Homeowner Account Create Successful
@stop

@section('content')
        <div class="row">
               <h5><i class="mdi-action-account-circle"></i> Homeowner Successfully Created</h5>
        </div>
        
        <div class="row center-align card">
           <div class="col s12 success-info">
               <h5><i class="mdi-navigation-check"></i>
             The new user record has been successfully created.</h5>
             <h5>A verification email has been sent to the given email address. Verify your email and create your account to get access in the system.</h5>
        
           </div>
            <a href="{{URL::route('HomeOwner.index')}}" class="btn-large waves-effect waves-light go-back"><i class="mdi-navigation-arrow-back left"></i>Go back to Homeowners List</a>
        </div>
@stop