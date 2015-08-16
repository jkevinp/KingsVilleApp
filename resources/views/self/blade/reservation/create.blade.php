@extends('homeowner.layout.layout')

@section('content')
<div class="row mt">
	<div class="col-md-4">
				<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Make Reports</h4>
                    {{Form::open(['class' => 'form-horizontal style-form' ,'route' => 'report.generate' , 'method' => 'post'])}}
                    <label>Model:</label>
					{{Form::select('model' , [
												'account' => 'Account',
												'sale' => 'Sales',
												'booking' => 'Reservations',

											], '', ['class' => 'form-control'])}}
					<label>Start date</label>
					<input type="date" class="form-control" id="date_start" name="datestart" placeholder="Enter Start Date">
					<label>End date</label>
					<input type="date" class="form-control" id="date_end" name="dateend" placeholder="Enter Start Date">
					<label>Sort:</label>
					{{Form::select('sort' , [
												'ascending' => 'ascending',
												'descending' => 'descending'

											], '', ['class' => 'form-control'])}}
					<label>Action:</label>
					{{Form::select('action' , [
												'stream' => 'stream',
												'download' => 'download'

											], '', ['class' => 'form-control'])}}
					<hr>
					{{Form::submit('Generate' , ['class' => 'btn btn-theme03'])}}
					{{Form::reset('Reset' , ['class' => 'btn btn-danger'])}}
					{{Form::close()}}
				</div>
		</div>
</div>
@stop