@extends('user.layout.layout')

@section('title')
  KingsVille- Verify New User
@stop

@section('content')




<div class="row mt">
                  <div class="col-lg-12">
                      <h4><i class="fa fa-user-add"></i> Forgot Password</h4>
                      <div class="form-panel">
                          <div class=" form">
                              <form class="cmxform form-horizontal style-form"  method="post" action="{{route('User.account.sendpassword')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                

                                <h2 class="violet">Personal Information</h2>
                                <hr>

                                <div class="form-group ">
                                      <label for="cemail" class="control-label col-lg-2">Email-Address*</label>
                                      <div class="col-lg-3">
                                          <input class="form-control " id="cemail" type="Email" name="email" required="" placeholder="Email-Address">
                                      </div>

                                  </div>
                                   <div class="form-group ">
                                      <label for="cemail" class="control-label col-lg-2">Confirm Email-Address*</label>
                                      <div class="col-lg-3">
                                          <input class="form-control " id="cemail" type="Email" name="email1" required="" placeholder="Repeat Email-Address">
                                      </div>

                                  </div>
                                
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button class="btn btn-theme " type="submit">Submit</button>
                                          <button class="btn btn-theme04" type="button">Reset</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div><!-- /form-panel -->
                  </div><!-- /col-lg-12 -->
              </div>
@stop