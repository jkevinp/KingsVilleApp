@extends('homeowner.layout.layout')

@section('title')
  KingsVille- Create New User
@stop

@section('content')
  <div class="row">
    <h5><i class="mdi-action-account-circle"></i> Create New User</h5>
  </div>
  <div class="row">

               
               <div class="col s12 card">
                   <div class="col s12">
                       <h5>Personal Information</h5>
                       <p>All fields with * are marked as required.</p>
                   </div>
                  
                   <div class="input-field col s4">
                       <input id="last_name" type="text" class="validate">
                       <label for="last_name">Last Name *</label>
                   </div>
                   <div class="input-field col s4">
                       <input id="first_name" type="text" class="validate">
                       <label for="first_name">First Name *</label>
                   </div>
                   <div class="input-field col s4">
                       <input type="text" id="middle_name"/>
                       <label for="middle_name">Middle Name</label>
                   </div>
                   <div class="input-field col s12">
                      <i class="mdi-action-home prefix"></i>
                       <input type="text" id="address" name="address"/>
                       <label for="address">Address</label>
                   </div>
                   <div class="input-field col s6">
                      <i class="mdi-hardware-phone-iphone prefix"></i>
                       <input type="text" id="mobile" name="mobile" class="validate">
                       <label for="mobile">Mobile *</label>
                   </div>
                   <div class="input-field col s6">
                       <i class="mdi-communication-phone prefix"></i>
                       <input type="text" id="landline" name="landline">
                       <label for="landline">Landline</label>
                   </div>

               </div>
        </div>
        
        <div class="row">
            <div class="col s6 card account-info">
                       <div class="col s12">
                           <h5>Account Information</h5>
                           <p>An email verification will be sent on the given email address. This will allow you to create your username and password.</p>
                       </div>
                           
                           <div class="input-field col s12">
                            <select>
                              <option value="" disabled selected>Select User Type</option>
                              <option value="1">Administrator</option>
                              <option value="2">Auditor</option>
                            </select>
                            <label>User Type *</label>
                         </div> 
                           
                            <div class="input-field col s12">
                               <i class="mdi-communication-email prefix"></i>
                               <input type="text" id="email" name="email">
                               <label for="email">Email *</label>
                           </div>  
                                                  
                     
            </div>
            
            
        </div>
        
        <div class="row right-align">
             <a href="{{URL::route('HomeOwner.account.create.success')}}" class="btn-large waves-effect waves-light blue darken-1" type="create" name="create">Create
                 <i class="mdi-content-send right"></i>
                 </a>
        </div>

@stop