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
          <a href="{{route('User.fee.create')}}" class="btn btn-theme"><i class="fa fa-plus"></i> Create New Fee</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-md-12">
    <div class="showback">
    <section id="no-more-tables"> 
    <table class="table table-bordered table-striped table-condensed cf">
    <h4><i class="fa fa-angle-right"></i> {{$title or 'List'}}<span class="badge bg-primary">{{$obj->count()}}</span></h4>
    <thead class="cf">                       
      <tr>
        @if($obj->count() != 0)
          @foreach ($obj->first()['fillable'] as $field)
            <th data-title="{{$field}}">{{$field}}</th>
          @endforeach
        @endif
        <th data-title="actions"><i class=" fa fa-edit"></i> Actions</th>
    </tr>
    </thead>
      <tbody>
         @foreach($obj as $t)
          <tr>
              <td  data-title="{{$t['fillable'][0]}}"><a href="{{route('User.bill.show' , $t->id)}}">{{$t['id']}}</a></td>
              <td contenteditable="true" data-title="{{$t['fillable'][1]}}"> {{$t['name']}}</td>
              <td contenteditable="true" data-title="{{$t['fillable'][2]}}">{{$t['target_table']}}</td>
              <td contenteditable="true" data-title="{{$t['fillable'][3]}}">{{$t['target_column']}}</td>
              <td contenteditable="true" data-title="{{$t['fillable'][4]}}">{{$t['value']}}</td>
              <td contenteditable="true" data-title="{{$t['fillable'][5]}}">{{$t['user_id']}}</td>
          
              <td data-title="actions">
                  <a href="{{route('User.fee.edit' , $t->id)}}" class="btn btn-xs btn-theme" title="Edit Fee"><i class="fa fa-edit"></i></a>
              </td>
          </tr>
    @endforeach
    </tbody>
</table>      
</section>

              </div><!-- /content-panel -->
          </div><!-- /col-md-12 -->         
      </div><!-- /row -->
      
    </div>
  </div>


      

@stop