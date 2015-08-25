@extends('self.layout.layout')

@section('content')
<div class="row mt">
    <div class="col-lg-6">
        <div class="row mt">
            	<div class="form-panel">
                    <div class=" form">
                        <form class="cmxform form-horizontal style-form"  method="post" action="{{$route or 'http://localhost:8000/user/meter-reading/store'}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h2 class="violet">Create new Bill</h2>
                            <hr>
                            <div class="form-group" id="billing_container">
                                <label for="billtype_id" class="control-label col-lg-2">Bill Type*</label>		
                                <div class="col-lg-10">
                                	{!! Form::select('billtype_id',  $billtype , null, ['id' => 'billtype_id', 'class' => 'selectize']) !!}
                 				</div>
                            </div>
                            <div class="form-group ">
                                <label for="readingdate" class="control-label col-lg-2">Start Date*</label>     
                                <div class="col-lg-10"><input name="readingdate"class="form-control input-medium default-date-picker" size="16" type="text"></div>
                            </div>
                            <div class="form-group ">
                                <label for="readingdate" class="control-label col-lg-2">End Date*</label>     
                                <div class="col-lg-10"><input name="datestart"class="form-control input-medium default-date-picker" size="16" type="text"></div>
                            </div>
                            <div class="form-group ">
                                <label for="details" class="control-label col-lg-2">Details*</label>		
                                <div class="col-lg-10"><textarea ="" class="form-control" style="resize:none;" id="details" placeholder="Details" required="" name="details" cols="50" rows="10"></textarea></div>
                            </div>
                            <input class="btn btn-theme" type="submit" value="Submit">
                            <input class="btn btn-theme04" type="submit" value="Reset">
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <div class="row mt">
    	<div class="col-lg-6" id="billtype_container">
            <div class="form-panel">
                <div class=" form">
                    <form class="cmxform form-horizontal style-form"  method="post" action="{{$route or 'http://localhost:8000/user/meter-reading/store'}}">
                        <input type="hidden" name="_token" value="jZTfEjMdGsNUZwDptAt9lvaD5KOaZNvhFeYdOcdS">
                        <h2 class="violet">Bill Type Information</h2>
                        <hr>
                        <div class="form-group ">
                            <label for="selectedbilltype_id" class="control-label col-lg-2">ID:</label>		
                            <div class="col-lg-10">
                            	 <div class="well" id="selectedbilltype_id"></div>
             				</div>
                        </div>
                        <div class="form-group ">
                            <label for="selectedbilltype_name" class="control-label col-lg-2">Name:</label>     
                            <div class="col-lg-10">
                                 <div class="well" id="selectedbilltype_name"></div>
                            </div>
                        </div>
                        <h2 class="violet">Fees Included</h2>
                        <section id="no-more-tables"> 
                            <table class="table table-bordered table-striped table-condensed cf">
                                <h4><i class="fa fa-angle-right"></i> Fees Included<span class="badge bg-primary"></span></h4>
                                <thead class="cf">                       
                                    <tr>
                                        <th>Fee Name</th>
                                        <th>Fee Amount</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_fees">
                                       
                                </tbody>
                            </table>      
                        </section>
                      
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="form-panel">
                <div class=" form">
                    <form class="cmxform form-horizontal style-form"  method="post" action="{{$route or 'http://localhost:8000/user/meter-reading/store'}}">
                        <input type="hidden" name="_token" value="jZTfEjMdGsNUZwDptAt9lvaD5KOaZNvhFeYdOcdS">
                        <h2 class="violet">Owner's Information</h2>
                        <hr>
                        <div class="form-group ">
                            <label for="meter_id" class="control-label col-lg-2">ID:</label>		
                            <div class="col-lg-10">
                            	 <div class="well" id="owner_id"></div>
             				</div>
                        </div>
                        <div class="form-group ">
                            <label for="meter_id" class="control-label col-lg-2">Name:</label>		
                            <div class="col-lg-10">
                            	 <div class="well" id="owner_name"></div>
             				</div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@stop

@section('script')
{!! Html::script('default\js\ajax\bill-create.js')!!}
@stop