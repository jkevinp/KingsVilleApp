@extends('default.layout.layout')

@section('title')
    KingsVille Index
@stop

@section('content')
 <div class="row">
               <h5><i class="mdi-action-account-circle"></i> Users</h5>
               <div class="input-field col s4 search-user--container">
                  <input id="search-user" type="text" class="validate" name="search-user">
                  <label for="last_name">Search</label>
                </div>
                
                <div class="input-field col s4 search-user--submit">
                    <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Submit
    <i class="mdi-content-send right"></i>
  </button>
                </div>
                
                <div class="col s4 user--create-new right-align">
                    <a href="{{URL::route('HomeOwner.create')}}" class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Create New User
    <i class="mdi-content-add left"></i>
  </a>
                </div>
        </div>
      
        
        <div class="row">
            <table class="striped">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>User Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>Administrator</td>
                    </tr>
                    @endforeach
                 
                    
                </tbody>
            </table>
        </div>

@stop