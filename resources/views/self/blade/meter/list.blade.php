@extends('self.layout.layout')

@section('content')
<div class="row mt">
  <div class="col-md-6 ">
    <div class="showback">
      {!! Form::open(['class' => 'form-inline' , 'role' => 'form']) !!}
        <div class="form-group">
            <i class="fa fa-search"> </i> 
        </div>
        <div class="form-group">
            {!! Form::text('keyword', null ,['class' => 'form-control' , 'placeholder' => 'Search']) !!}
        </div>
      {!! Form::submit('Submit' , ['class' => 'btn btn-theme']) !!}
      {!! Form::close() !!}
    </div><!-- /form-panel -->
  </div>
  <div class="col-md-6"> 
    <div class="showback">
      <div class="btn-group btn-group-justified">
        <div class="btn-group">
          <a href="{{route('User.meter.create')}}" class="btn btn-theme"><i class="fa fa-plus"></i> Create New Meter</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-md-12">
    <div class="showback">
    <table class="table table-bordered table-striped table-condensed">
    <h4><i class="fa fa-angle-right"></i> {{$title or 'Meter List'}}<span class="badge bg-primary">{{$obj->count()}}</span></h4>
    <thead>                       
      <tr>
        @if($obj->count() != 0)
          @foreach ($obj->first()['fillable'] as $field)
            <th>{{$field}}</th>
          @endforeach
        @endif
        <th><i class=" fa fa-edit"></i> Actions</th>
    </tr>
    </thead>
      <tbody>
         @foreach($obj as $t)
          <tr>
              <td>{{$t['id']}}</td>
              <td><a href="{{route('User.account.profile' , $t['user_id'])}}">{{$t['user_id']}}</a></td>
              <td>{{$t['readingunit']}}</td>
              <td>{{$t['status']}}</td>
              <td>{{$t['details']}}</td>
              <td>
                 
              </td>
          </tr>
    @endforeach
    </tbody>
</table>      

              </div><!-- /content-panel -->
          </div><!-- /col-md-12 -->         
      </div><!-- /row -->
    </div>
  </div>


      

@stop