@extends('self.layout.layout')

@section('content')

 <div class="position:absolute; top:-50px; left:0px;">
                <input type="text" id="search" class="form-control" style="">
                <div class="output" style="position:relative; overflow:visible; " id="output" >
                </div>
                </div>
<div class="row mt">
    <div class="col-lg-6">
        <div class="form-panel">
           <h4><i class="fa fa-user-add"></i> Water Reading (Prototype)</h4>
            <div class=" form">
                <label class="col-lg-2">Rate/unit </label>        <input type="text" value="17" min="0" name="rate" id="rate"  class="form-control" readonly>
                <label class="col-lg-2">Last Reading: </label>    <input type="number" value="0" min="0"name="lastreading" id="last"  class="form-control">
                <label class="col-lg-2">Current Reading: </label> <input type="number" value="0" min="0" name="currentreading" id="current" class="form-control">
                <hr/>
                <label class="col-lg-2">Total Consumption: </label> <input type="number" name="currentreading" id="total" class="form-control" readonly>
                <label class="col-lg-2">Total Bill(PHP): </label>    <input type="number" name="currentreading" id="bill" class="form-control" readonly>
            </div>
        </div><!-- /form-panel -->
    </div><!-- /col-lg-12 -->
    <div class="col-lg-6">
        <div class="form-panel">
           <h4><i class="fa fa-user-add"></i> Bill To</h4>
            <div class=" form">
               
                @if(count($users) > 0)
                <select class="form-control">
                    @foreach($users as $user)
                      <option value="{{$user['id']}}">{{$user['firstname']}} {{$user['middlename']}} {{$user['lastname']}}</option>
                    @endforeach
                </select>
                @else 
                <p class="alert alert-warning">No users Found!</p>
                @endif
            </div>
            <button class="btn btn-theme btn-lg btn-block" id="compute">Compute!</button>
            <div class="result">

            </div>
        </div><!-- /form-panel -->
    </div><!-- /col-lg-12 -->
</div>



@stop



@section('script')
<script type="text/javascript">
$( document ).ready(function() {
    var last = $('#last');
    var current = $('#current');
    var total = $('#total');
    var rate= $('#rate').val();
    var bill = $('#bill');
    $('#compute').click(function(){
     
      var totalConsumption =current.val() -last.val()   ;
      total.val(totalConsumption);
      bill.val(totalConsumption * rate);
    });
    $('#search').on('keyup', function(){
       var outputDiv = $('.output');
    
       $.get(window.location.protocol + "//" + window.location.host + "/user/account/ajaxSearch",  { param: $('#search').val()}, function( data ) {
        outputDiv.html('');
      
                var cname = data.id + "- " + data.firstname + data.middlename + data.lastname ;
                output += '<div class=" " style="">';
                output += '<a href="" class="btn btn-theme btn-block">' + cname + '</a>';
                output += '</div>';
                 output += '<div class=" " style="">';
                output += '<a href="" class="btn btn-theme btn-block">' + cname + '</a>';
                output += '</div>';
                 output += '<div class=" " style="">';
                output += '<a href="" class="btn btn-theme btn-block">' + cname + '</a>';
                output += '</div>';
           
    
         outputDiv.html(output);
        });
    });
   

});
</script>

@stop