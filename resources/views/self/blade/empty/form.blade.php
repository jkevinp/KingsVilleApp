@extends('self.layout.layout')

@section('content')
@if(!is_array($form))
<div class="row mt">
	<div class="col-lg-{{$col or '12'}}">
		<div class="form-panel">
			<div class=" form">
				<form class="cmxform form-horizontal style-form"  method="post" action="{{$route or '#'}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<h2 class="violet">{{$formTitle or 'Form'}}</h2>
				<hr>
				{!! $inject or '' !!}
				{!! $form or 'no form passed' !!}
				{!! Form::submit('Submit' ,['class' => 'btn btn-theme'  ]) !!}
				{!! Form::submit('Reset' , ['class' => 'btn btn-theme04']) !!}
				{!! Form::close() !!}
            </div>
		</div>
	</div>
</div>
@else
	<div class="row mt">
	@foreach($form as $f)
		<div class="col-lg-{{$col or '12'}}">
			<div class="form-panel">
				<div class=" form">
					<form class="cmxform form-horizontal style-form"  method="post" action="{{$f['route'] or '#'}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<h2 class="violet">{{$f['formTitle'] or 'Form'}}</h2>
					<hr>
					{!! $f['inject'] or '' !!}
					{!! $f['form'] or 'no form passed' !!}
					
					{!! Form::submit('Submit' ,['class' => 'btn btn-theme'  ]) !!}
					{!! Form::submit('Reset' , ['class' => 'btn btn-theme04']) !!}
					
					{!! Form::close() !!}
	            </div>
			</div>
		</div>

	@endforeach
		</div>
@endif
@stop

@section('script')
<script type="text/javascript">
	<?php if(!empty($injectjs))echo $injectjs; ?> 
	
</script>
@if(!empty($js))
{!! Html::script($js)!!}
@endif
@stop