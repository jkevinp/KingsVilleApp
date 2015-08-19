$(document).ready(function(){
	$('#meter_id').selectize();
	$('#meter_id').on('change', function(){
		var meterid= $('#meter_id').val();
		$.get(page_user + 'meter/ajax/' ,{meterid: meterid} , function(data){
			var snip = 'Meter Details<br/>';
			snip += 'User:' + data.meter.user_id;
			if(data.reading != null){
				$('#lastreading').val(data.reading.currentreading);
				$('#currentreading').attr('min' , data.reading.currentreading);
			}else {
				$('#lastreading').val(0);
				$('#currentreading').attr('min' , 0);
			}
			bootbox.alert(snip);
		});
	});
});
$('#meter_id').change();