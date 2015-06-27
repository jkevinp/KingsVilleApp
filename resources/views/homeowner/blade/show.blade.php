@extends('homeowner.layout.layout')

@section('title')
    KingsVille Index
@stop

@section('content')
 <div class="row">
               <h5><i class="mdi-action-account-circle"></i> Users</h5>
               <div class="input-field col s4 search-user--container">
                {!! Form::open(['route' => 'HomeOwner.account.search' , 'method' => 'get']) !!}
                {!! Form::text('Search' ,'' , ['class' => 'validate' , 'id' => 'search-user' , 'name' => 'search-user']) !!}
                <label for="search-user">Search</label>
                </div>
                <div class="input-field col s4 search-user--submit">
                <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Submit
    <i class="mdi-content-send right"></i>
                {!! Form::close() !!}
  </button>
                </div>
                
                <div class="col s4 user--create-new right-align">
                    <a href="{{URL::route('HomeOwner.account.create')}}" class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Create New Homeowner
    <i class="mdi-content-add left"></i>
  </a>
                </div>
        </div>
      
        
        <div class="row">
            <table class="striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>User Group</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($homeowners as $user)
                        <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->middlename}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->usergroup}}</td>
                    </tr>
                    @endforeach
                 
                    
                </tbody>
            </table>
        </div>

@stop
