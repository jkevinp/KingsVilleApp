@extends('user.layout.layout') @section('content')
<div class="row mt">
    <div class="col-lg-12">
         <h4><i class="fa fa-user-add"></i> Edit User</h4>

        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" method="post" action="{{route('User.account.store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <h2 class="violet">Personal Information</h2>

                    <hr>
                     @foreach($user['fillable'] as $field)
                    <div class="form-group ">
                        <label for="cemail" class="control-label col-lg-2">{{$field}}*</label>
                        <div class="col-lg-3">
                            <input class="form-control "  readonly value="{{$user[$field]}}" type="text" name="{{$field}}" required="" placeholder="{{$field}}">
                        </div>
                    </div>@endforeach</div>
        </div>
    </div>@stop