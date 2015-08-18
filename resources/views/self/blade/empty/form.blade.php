@extends('self.layout.layout')

@section('content')
	<div class="row mt">
		<div class="col-lg-12">
			<div class="form-panel">
				<div class=" form">
						<form class="cmxform form-horizontal style-form"  method="post" action="{{$route}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<h2 class="violet">{{$formTitle or ''}}</h2>
						<hr>
						{!! $inject or '' !!}
						{!! $form !!}
						{!! Form::submit('submit' ,['class' => 'btn btn-theme'  ]) !!}
						{!! Form::submit('Reset' , ['class' => 'btn btn-theme04']) !!}
						{!! Form::close() !!}
                         </div>
				</div>
			</div>
	</div>
@stop

@section('script')
<script type="text/javascript">
	<?php if(!empty($injectjs))echo $injectjs; ?> 
	
</script>
@stop