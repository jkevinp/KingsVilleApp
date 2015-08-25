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
          <a href="{{route('User.expenditure.type.create')}}" class="btn btn-theme"><i class="fa fa-plus"></i> Create New Expenditure Type</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-md-12">
    <div class="showback">
    <table class="table table-bordered table-striped table-condensed">
    <h4><i class="fa fa-angle-right"></i> {{$title or 'List'}}<span class="badge bg-primary">{{$obj->count()}}</span></h4>
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
              <td><a href="{{route('User.bill.show' , $t->id)}}">{{$t['id']}}</a></td>
              <td><input type="text" value="{{$t['name']}}" class="form-control"/></td>
              <td>{{$t['description']}}</td>
              <td>{{$t['user_id']}}</td>
              <td>
                  <a href="{{route('User.fee.delete' , $t->id)}}" class="btn btn-danger btn-xs" title="Delete Fee"><i class="fa fa-trash-o"></i> </a>
                  <a href="{{route('User.fee.edit' , $t->id)}}" class="btn btn-xs btn-theme" title="Edit Fee"><i class="fa fa-edit"></i></a>
                  @if($t->status =='inactive') 
                  <a href="{{route('User.fee.changestatus' ,   $t->id)}}" class="btn btn-xs btn-theme03" title="Activate Fee"><i class="fa fa-power-off"></i></a> 
                  @else
                  <a href="{{route('User.fee.changestatus' ,   $t->id )}}" class="btn btn-xs btn-theme04" title="Deactivate Fee"><i class="fa fa-power-off"></i></a>
                  @endif
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