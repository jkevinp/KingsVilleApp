@extends('user.layout.layout')

@section('title')
    KingsVille Index
@stop

@section('content')

<div class="row mt">
  <div class="col-md-6">
    <div class="showback">
      {!! Form::open(['route' => 'User.account.search' , 'method' => 'get' , 'role' => 'form' , 'class' => 'form-inline']) !!}
        <div class="form-group">
            <i class="fa fa-search"> </i> 
        </div>
        <div class="form-group">
             {!! Form::text('Search' ,'' , ['class' => 'form-control' , 'id' => 'search-user' , 'name' => 'search-user']) !!}
        </div>
      {!! Form::submit('Submit' , ['class' => 'btn btn-theme']) !!}
      {!! Form::close() !!}
    </div><!-- /form-panel -->
  </div>

<div class="col-md-6 "> 
  <div class="showback">
  <div class="btn-group btn-group-justified">
    <div class="btn-group">
        <a href="{{route('User.account.create')}}" class="btn btn-theme"><i class="fa fa-plus"></i> Create New User</a>
    </div>
  </div>
</div>
</div>
</div>
     
      <div class="row mt">
         <div class="col-md-12" >
            <div class="showback">
            <h4 class="violet"><i class="fa fa-angle-right"></i> User List</h4>
                <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
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
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
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

                        <td>{{$user->status}}</td>
                        <td> 
                            <a href="{{route('User.account.edit' , $user->id)}}" class="btn btn-xs btn-theme" title="Edit User"><i class="fa fa-edit"></i></a>
                            @if($user->status =='inactive') 
                            <a href="{{route('User.account.changestatus' ,   $user->id)}}" class="btn btn-xs btn-theme03" title="Activate User"><i class="fa fa-power-off"></i></a> 
                            @else
                            <a href="{{route('User.account.changestatus' ,   $user->id )}}" class="btn btn-xs btn-theme04" title="Deactivate User"><i class="fa fa-power-off"></i></a>
                            @endif
                        </td>

                    </tr>
                    @endforeach
                 
                    
                </tbody>
                          </table>
                          </section>
                  </div>
              </div>
        </div>
      

@stop
