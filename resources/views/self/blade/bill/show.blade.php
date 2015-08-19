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
			<div class="well well-small green">
				<div class="pull-left"> Total Due : </div>
				<div class="pull-right"> {{$bill->amount}} </div>
				<div class="clearfix"></div>
			</div>
		</div><!-- /invoice-body -->
	</div><!-- --/col-lg-10 ---->
	<table class="table">
		<thead>
		<tr>
		<th style="width:60px" class="text-center">QTY</th>
		<th class="text-left">DESCRIPTION</th>
		<th style="width:140px" class="text-right">UNIT PRICE</th>
		<th style="width:90px" class="text-right">TOTAL</th>
		</tr>
		</thead>
			<tbody>
				<tr>
				<td class="text-center">{{$bill->meterreading->currentreading -$bill->meterreading->lastreading }}x</td>
				<td>{{$bill->meter->readingunit}}</td>
				<td class="text-right">17.00</td>
				<td class="text-right">$429.00</td>
				</tr>
				<td colspan="2" rowspan="4"><h4>Terms and Conditions</h4>
					<p>Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.</p>
				</td><td class="text-right"><strong>Subtotal</strong></td>
				<td class="text-right">$1029.00</td>
				</tr>
				<tr>
				<td class="text-right no-border"><strong>Shipping</strong></td>
				<td class="text-right">$0.00</td>
				</tr>
				<tr>
				<td class="text-right no-border"><strong>VAT Included in Total</strong></td>
				<td class="text-right">$0.00</td>
				</tr>
				<tr>
				<td class="text-right no-border"><div class="well well-small green"><strong>Total</strong></div></td>
				<td class="text-right"><strong>$1029.00</strong></td>
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