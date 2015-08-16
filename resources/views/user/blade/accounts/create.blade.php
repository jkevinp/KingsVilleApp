@extends('user.layout.layout')

@section('title')
  KingsVille- Create New User
@stop

@section('content')




<div class="row mt">
                  <div class="col-lg-12">
                      <h4><i class="fa fa-user-add"></i> Create New User</h4>
                      <div class="form-panel">
                          <div class=" form">
                              <form class="cmxform form-horizontal style-form"  method="post" action="{{route('User.account.store')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <h2 class="violet">Personal Information</h2>
                                <hr>
                                <div class="form-group ">
                                      <label for="cemail" class="control-label col-lg-2">E-Mail Address*</label>
                                      <div class="col-lg-3">
                                          <input class="form-control " id="cemail" type="email" name="email" required="" placeholder="username@domain.com">
                                      </div>

                                  </div>
                                  <div class="form-group ">
                                      <label for="cname" class="control-label col-lg-2">Full Name</label>
                                      <div class="col-lg-3">
                                          <input class=" form-control" id="cname" name="lastname" placeholder="Lastname" minlength="2" type="text" required="">
                                      </div>
                                      <div class="col-lg-3">
                                          <input class=" form-control" id="cname" name="firstname" placeholder="Firstname" minlength="2" type="text" required="">
                                      </div>
                                      <div class="col-lg-3">
                                          <input class=" form-control" id="cname" name="middlename" placeholder="Middlename" minlength="2" type="text" required="">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Gender</label>
                                    <div class="col-lg-3">
                                      <select class="form-control" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                      </select>
                                    </div>
                                  </div>

                                  <h2 class="violet">Contact Information</h2>
                                  <hr>
                                  <div class="form-group ">
                                      <label for="curl" class="control-label col-lg-2">Mobile & Landline</label>
                                       <div class="col-lg-3">
                                          <input class="form-control " id="curl" type="number" name="mobile" placeholder="Mobile: +63-XXXXXXXXXX">
                                      </div>
                                      <div class="col-lg-3">
                                          <input class="form-control " id="curl" type="number" name="landline" placeholder="Landline: 02-XXX XXXX">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group ">
                                    <label for="curl" class="control-label col-lg-2">User Type</label>
                                    <div class="col-lg-3">
                                      <select class="form-control" name="usergroup">
                                        <option value="homeowner">Homeowner</option>
                                        <option value="admin">Administrator</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="ccomment" class="control-label col-lg-2">Current Address</label>
                                      <div class="col-lg-6">
                                          <textarea class="form-control " name="address" required=""></textarea>
                                      </div>
                                  </div>

                                  <div class="form-group ">
                                      <label for="ccomment" class="control-label col-lg-2">Property Address</label>
                                      <div class="col-lg-6">
                                          <textarea class="form-control " name="propertyaddress" required=""></textarea>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button class="btn btn-theme " type="submit">Create User</button>
                                          <button class="btn btn-theme04" type="button">Reset</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div><!-- /form-panel -->
                  </div><!-- /col-lg-12 -->
              </div>
@stop