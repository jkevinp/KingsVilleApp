@extends('self.layout.layout')

@section('content')
<div class="row mt">
    <div class="col-lg-6">
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" method="post" action="{{$route or ''}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h2 class="violet">Create new Fee</h2>
                <hr>
                <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Name*</label>
                    <div class="col-lg-10">
                        <input =""="" class="form-control" id="name" placeholder="Name" required="" name="name" type="text"></div>
                    </div>
                <div class="form-group ">  
                    <label for="billtype_id" class="control-label col-lg-2">Bill Type*</label>        
                    <div class="col-lg-10">
                        {!! Form::select('billtype_id',  $billtype , null, ['id' => 'billtype_id', 'class' => 'selectize']) !!}
                    </div> 
                </div>
                <div class="form-group ">    
                    <label for="type" class="control-label col-lg-2">Type*</label>      
                    <div class="col-lg-10">
                        <select =""="" class="form-control" id="type" name="type">
                            <option value="fixed">By Fixed value</option>
                            <option value="percentage">By Percentage</option>
                            <option value="unit">Per Unit</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group ">    
                    <label for="status" class="control-label col-lg-2">Status*</label>      
                    <div class="col-lg-10">
                        <select =""="" class="form-control" id="status" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option></select>
                        </div> 
                    </div>
                    <div class="form-group ">    
                        <label for="rate" class="control-label col-lg-2">Rate*</label>      
                        <div class="col-lg-10">
                            <input =""="" class="form-control" id="rate" placeholder="Rate" required="" name="rate" type="number">
                        </div> 
                    </div>
                <input class="btn btn-theme" type="submit" value="Submit">
                <input class="btn btn-theme04" type="submit" value="Reset">
                </form>
        </div>
    </div>

</div>
<div class="col-lg-6">
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" method="post" action="{{$route or ''}}">
                <input type="hidden" name="_token" value="jZTfEjMdGsNUZwDptAt9lvaD5KOaZNvhFeYdOcdS">
                <h2 class="violet">Bill Type Information</h2>
                <hr>
                <div class="alert alert-info">
                    <label for="name" class="">Confirm Bill Type Information. The Fee "<span id="newfeename"></span>" will be assigned to the selected bill type.</label>
                </div>
                <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Bill Id*</label>
                    <div class="col-lg-10">
                        <input readonly class="form-control" id="bill_id" placeholder="Id" required="" name="name" type="text"></div>
                    </div>

                <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Name*</label>
                    <div class="col-lg-10">
                        <input readonly class="form-control" id="bill_name" placeholder="Name" required="" name="name" type="text"></div>
                </div>
                <div class="form-group ">    
                    <label for="bill_desc" class="control-label col-lg-2">Description*</label>      
                    <div class="col-lg-10">
                           <div id="bill_desc"  class="well"></div>
                    </div> 
                </div>
                <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Created*</label>
                    <div class="col-lg-10">
                        <input readonly class="form-control" id="bill_created" placeholder="Date" required="" name="name" type="text"></div>
                </div>

                </form>
        </div>
    </div>
</div>

@stop

@section('script')
<SCRIPT TYPE="text/javascript">

    $('#billtype_id').on('change' , function(){

        $('#newfeename').text($('#name').val());
          $('#bill_id').val('');
            $('#bill_name').val('');
            $('#bill_desc').html('');
            $('#bill_created').val('');
       $.get(page_user + "bill-type/search" ,
        {id : $(this).val()},
         function(data){
            $('#bill_id').val(data.id);
            $('#bill_name').val(data.name);
            $('#bill_desc').html(data.description);
            $('#bill_created').val(data.created_at);
        }).fail(function(x){
            bootbox.alert('Error<hr/>' +x);
        });
    });
     $('#billtype_id').change();
</SCRIPT>
@stop
