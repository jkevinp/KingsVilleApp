@extends('homeowner.layout.layout')

@section('content')
<div class="row mt">
    <div class="col-lg-12">
         <h4><i class="fa fa-user-add"></i> Fees</h4>

        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" method="post" action="{{route('User.fee.store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <h2 class="violet">Create New Fee</h2>
                    <hr>{!! Form::open()!!} 
                    @foreach($fields as $field)
                    <div class="form-group ">
                        <label for="cemail" class="control-label col-lg-2">{{$field}}*</label>
                        <div class="col-lg-3">
                            <input class="form-control " value="" type="text" name="{{$field}}" required="" placeholder="{{$field}}">
                        </div>
                    </div>@endforeach</div>
                    {!! Form::submit('Submit' , ['class' => 'btn btn-theme03']) !!}
					{!! Form::reset('Reset' , ['class' => 'btn btn-danger']) !!}
					{!! Form::close()!!}
        </div>
    </div>@stop