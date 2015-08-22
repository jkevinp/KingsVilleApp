@extends('self.layout.layout')

@section('content')

<div class="row mt">
	<div class="col-lg-10 col-lg-offset-1">
		<div class="showback">
		<div class="invoice-body">
			<div class="pull-left"> 
				<h1>Water Bill</h1>
				<address>
				<strong>KingsVille Homeowner's Association</strong><br>
				Antipolo City, Rizal<br>
				<abbr title="Phone">P:</abbr> (123) 456-7890
				</address>
			</div><!-- /pull-left -->
			
			<div class="pull-right">
				<h2>Monthly Water Bill</h2>
			</div><!-- --/pull-right ---->
			
			<div class="clearfix"></div>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="col-md-9">

					<h4>{{$bill->meter->user['firstname']}} {{$bill->meter->user['middlename']}} {{$bill->meter->user['lastname']}}</h4>
					<address>
					<strong>{{$bill->meter->user['usergroup']}}</strong><br>
					{{$bill->meter->user['currentaddress']}}<br>
					{{$bill->meter->user['propertyaddress']}}<br>
					<abbr title="Phone">P:</abbr> {{$bill->meter->user['landline']}}<br/>
					<abbr title="Phone">M:</abbr> {{$bill->meter->user['mobile']}}
					</address>
				</div><!-- --/col-md-9 ---->
				<div class="col-md-3"><br>
					<div>
						<div class="pull-left"> Bill ID :</div>
						<div class="pull-right"> {{$bill->id}} </div>
						<div class="clearfix"></div>
					</div>
				<div><!-- /col-md-3 -->
				<div class="pull-left"> Due date: </div>
				<div class="pull-right"> {{$bill->duedate}} </div>
				<div class="clearfix"></div>
			</div><!-- --/row ---->
			<br>
			<div class="alert alert-info">
				<div class="pull-left"> Total Due : </div>
				<div class="pull-right"> {{$bill->amount}} </div>
				<div class="clearfix"></div>
			</div>
		</div><!-- /invoice-body -->
	</div><!-- --/col-lg-10 ---->
	<table class="table">
		<thead>
		<tr>
			<th style="width:60px" class="text-left">Bill detail ID</th>
			<th style="width:60px" class="text-left">UNIT/QTY</th>
			<th style="width:60px" class="text-left">Fee Type</th>
			<th style="width:140px" class="text-left">Fee Rate</th>
			<th style="width:90px" class="text-left">Total</th>
		</tr>
		</thead>
			<tbody>
				@foreach($bill->billdetail as $bd)
				<tr>
					<td class="text-left no-border"><strong>{{$bd->id}}</strong></td>
					<td class="text-left">{{$bd->unit}}</td>
					<td class="text-left">{{$bd->fee->type}}</td>
					<td class="text-left">{{$bd->fee->rate}} @if($bd->fee->type =='percentage') % @endif </td>
					<td class="text-left"><b>{{$bd->amount}}</b></td>
				</tr>
				@endforeach
				<tr>
					<td colspan="4"></td>
					<td colspan="1">
						<div class="alert alert-info">
							<div class="pull-left"> Total Bill: </div>
							<div class="pull-right"> {{$bill->amount}} </div>
							<div class="clearfix"></div>
						</div>
					</td>
				</tr>
			</tbody>
	</table>
	<br>
	<br>
		</div><!--/col-lg-12 mt -->
	</div>
</div>
</div>
	@stop