<?php

Route::get('/', ['uses' => 'HomeController@index','as' => 'Guest.home']);
Route::group(['prefix' => 'session'], function(){
	Route::get( '/login',   ['uses' => 'AuthenticationController@login',  'as' => 'auth.login']);
	Route::post('/login',   ['uses' => 'AuthenticationController@signin', 'as' => 'auth.signin']);
	Route::get( '/logout' , ['uses' => 'AuthenticationController@logout', 'as' => 'auth.logout']);
});
    
Route::get('/t', function(){
	var_dump(Session::get('active'));
   dd(Auth::user());
});
Route::get('/f', function(){
	Session::flush();
});

// cubic feet (ft.3) or US gallons
// cubic metres (m3) or litres
Route::group(['prefix' => 'user'] , function(){

	Route::get('/index/', 'UserController@index');
	Route::get('/',  	  ['uses' => 'UserController@indexUser' , 'as' => 'User.index']);
	//user panel = user section
	Route::group(['prefix' => 'account'] , function(){
		Route::get('/list/',   ['uses' => 'UserController@listUser' , 'as' => 'User.account.list']);

		Route::get('/create/', ['uses' => 'UserController@create' , 'as' => 'User.account.create']);
		Route::post('/store/', ['uses' => 'UserController@store' , 'as' => 'User.account.store']);

		Route::post('/update' , ['uses' => 'UserController@update'  , 'as' => 'User.account.update']);
		Route::post('/update-info/' , ['uses' => 'UserController@password'  , 'as' => 'User.account.password']);

		Route::get('/ajaxSearch/', ['uses' => 'UserController@ajaxSearch' , 'as' => 'User.account.livesearch']);
		Route::get('/search/', ['uses' => 'UserController@search' , 'as' => 'User.account.search']);
		Route::get('/edit/{id}/', ['uses' => 'UserController@edit' , 'as' => 'User.account.edit']);
		Route::get('/create/success', ['uses' => 'UserController@store' , 'as' => 'User.account.create.success']);
		Route::get('/verify/{token}' , ['uses' => 'UserController@verify', 'as' => 'User.account.verify']);
		Route::get('/forgotpassword/' , ['uses' => 'UserController@forgotPassword', 'as' => 'User.account.forgotpassword']);
		Route::post('/sendpassword/' , ['uses' => 'UserController@sendPassword', 'as' => 'User.account.sendpassword']);
		Route::get('/changeStatus/{id}' , ['uses' => 'UserController@changeStatus' , 'as' => 'User.account.changestatus']);
		Route::get('/profile/{id}' , ['uses' => 'UserController@profile' , 'as' => 'User.account.profile']);
	});

	Route::group(['prefix' => 'fee'] , function(){
		Route::get('/list/' , ['uses' => 'FeeController@listFee' , 'as' => 'User.fee.list']);
		Route::get('/trash/' , ['uses' => 'FeeController@listTrashedFee' , 'as' => 'User.fee.trash']);
		Route::get('/restore/{id}' , ['uses' => 'FeeController@restore' , 'as' => 'User.fee.restore']);
		Route::get('/create/' , ['uses' => 'FeeController@create' , 'as' => 'User.fee.create']);
		Route::post('/save/' , ['uses' => 'FeeController@store' , 'as' => 'User.fee.store']);
		Route::get('/changeStatus/{id}' , ['uses' => 'FeeController@changeStatus' , 'as' => 'User.fee.changestatus']);
		Route::get('/edit/{id}' , ['uses' => 'FeeController@edit' , 'as' => 'User.fee.edit']);
		Route::get('/delete/{id}' , ['uses' => 'FeeController@destroy' , 'as' => 'User.fee.delete']);
	});


	Route::group(['prefix' => 'meter'] , function(){
		Route::get('/create/' ,['uses' => 'MeterController@createMeter' , 'as' => 'User.meter.create']);
		Route::post('/store/' , ['uses' => 'MeterController@storeMeter' , 'as' => 'User.meter.store']);
		Route::get('/restore/{id}' , ['uses' => 'MeterController@restoreMeter' , 'as' => 'User.meter.restore']);
		Route::get('/trash/' , ['uses' => 'MeterController@listTrashedMeter' , 'as' => 'User.meter.trash']);
		
		Route::get('/ajax/' , ['uses' => 'MeterController@getMeter' , 'as' => 'User.meter.ajax']);
		Route::get('/list/' , ['uses' => 'MeterController@listMeter' , 'as' => 'User.meter.list']);
		Route::get('/delete/{id}' , ['uses' => 'MeterController@deleteMeter' , 'as' => 'User.meter.delete']);
		Route::get('/edit/{id}' , ['uses' => 'MeterController@editMeter' , 'as' => 'User.meter.edit']);
		Route::get('/changeStatus/{id}' , ['uses' => 'MeterController@changeMeterStatus' , 'as' => 'User.meter.changestatus']);
	});

	Route::group(['prefix' => 'bill'] , function(){
		Route::get('/store/' ,['uses' => 'BillController@store' , 'as' => 'User.bill.store']);
		Route::get('/show/{id}' , ['uses' => 'BillController@show' , 'as' => 'User.bill.show']);
		Route::get('/list/' , ['uses' => 'BillController@listBill' , 'as' => 'User.bill.list']);
	});


	Route::group(['prefix' => 'meter-reading'] , function(){
		Route::get('/create/' , ['uses' => 'MeterController@createMeterReading' , 'as' => 'User.meter.reading.create']);
		Route::post('/store/' , ['uses' => 'MeterController@storeMeterReading' , 'as' => 'User.meter.reading.store']);
		Route::get('/list/' ,   ['uses' => 'MeterController@listMeterReading' , 'as' => 'User.meter.reading.list']);
	});

	Route::group(['prefix' => 'bill-type'] , function(){
		Route::get('/create/' , ['uses' => 'BillTypeController@create' , 'as' => 'User.bill.type.create']);
		Route::post('/store/' , ['uses' => 'BillTypeController@store' , 'as' => 'User.bill.type.store']);
		Route::get('/list/' ,   ['uses' => 'BillTypeController@listBillType' , 'as' => 'User.bill.type.list']);
		Route::get('/search/' ,   ['uses' => 'BillTypeController@search' , 'as' => 'User.bill.type.ajax']);
	});


	Route::group(['prefix' => 'content'] , function(){
		Route::get('/create/' , ['uses' => 'ContentsController@create' , 'as' => 'User.content.create']);
		Route::get('/list/' , ['uses' => 'ContentsController@listContent' , 'as' => 'User.content.list']);
		Route::post('/save/' ,  ['uses' => 'ContentsController@store' , 'as' => 'User.content.store']);
	});

	Route::group(['prefix' => 'reservation'] , function(){
		Route::get('/list/' , ['uses' => 'ReservationController@listReservation' , 'as' => 'User.reservation.list']);
		Route::get('/' , ['uses' => 'ReservationController@listReservation' , 'as' => 'User.reservation.list']);
		Route::get('/create/' , ['uses' => 'ReservationController@create' , 'as' => 'User.reservation.create']);
		Route::post('/save/' , ['uses' => 'ReservationController@store' , 'as' => 'User.reservation.store']);
		Route::get('/edit/{id}' , ['uses' => 'ReservationController@edit' , 'as' => 'User.reservation.edit']);
	});

	Route::group(['prefix' => 'transaction'] , function(){
		Route::get('/list/' ,  ['uses' => 'TransactionController@show' , 'as' => 'User.transaction.list']);
		Route::get('/ledger/' ,  ['uses' => 'TransactionController@ledger' , 'as' => 'User.transaction.ledger']);

		Route::group(['prefix' => 'billing'] , function(){
			Route::get('/water/'  ,	['uses'=> 'TransactionController@waterBilling' , 'as' =>'User.transaction.billing.water']);
		});
	});

	Route::group(['prefix' => 'reservable'] , function(){
		Route::get('/list/' , 	['uses' => 'ReservableController@listReservable' , 'as' => 'User.reservable.list']);
		Route::get('/create/' , ['uses' => 'ReservableController@create' ,         'as' => 'User.reservable.create']);
		Route::post('/save/' , 	['uses' => 'ReservableController@store' ,          'as' => 'User.reservable.store']);
		Route::get('/edit/{id}',['uses' => 'ReservableController@edit' ,           'as' => 'User.reservable.edit']);
		Route::get('/delete/{id}',['uses' => 'ReservableController@destroy' ,      'as' => 'User.reservable.delete']);
		Route::get('/changeStatus/{id}' , ['uses' => 'ReservableController@changeStatus' , 'as' => 'User.reservable.changestatus']);
	});

	Route::group(['prefix' => 'property'] , function(){
		Route::get('/list/' , 	['uses' => 'PropertyController@listProperty' , 'as' => 'User.property.list']);
		Route::get('/' , 		['uses' => 'PropertyController@listProperty' , 'as' => 'User.property.list']);
		Route::get('/create/' , ['uses' => 'PropertyController@create' ,         'as' => 'User.property.create']);
		Route::post('/save/' , 	['uses' => 'PropertyController@store' ,          'as' => 'User.property.store']);
		Route::get('/edit/{id}',['uses' => 'PropertyController@edit' ,           'as' => 'User.property.edit']);
		Route::get('/changeStatus/{id}' , ['uses' => 'PropertyController@changeStatus' , 'as' => 'User.property.changestatus']);
	});

	Route::get('/session/logout', ['uses' => 'UserController@logout' , 'as' => 'User.session.logout']);
	
	//User Panel= homeowner section
	Route::group(['prefix' => 'homeowner'] , function(){
	Route::group(['prefix' => 'account'] , function(){
		//Route::get('/create/', ['uses' => 'HomeOwnerController@create' , 'as' => 'User.HomeOwner.account.create']);
		//Route::get('/search/', ['uses' => 'HomeOwnerController@search' , 'as' => 'User.HomeOwner.account.search']);
		//Route::get('/create/success', ['uses' => 'HomeOwnerController@store' , 'as' => 'User.HomeOwner.account.create.success']);
	});
	});
});



//HomeOwner Panel
Route::group(['prefix' => 'homeowner'] , function(){
	Route::get('/dashboard',  	  ['uses' => 'UserController@indexHomeowner' , 'as' => 'HomeOwner.index']);
	Route::group(['prefix' => 'account'] , function(){
		Route::get('/create/',        ['uses' => 'UserController@create' , 'as' => 'HomeOwner.account.create']);
		Route::get('/search/',        ['uses' => 'UserController@search' , 'as' => 'HomeOwner.account.search']);
		Route::get('/create/success', ['uses' => 'UserController@store' , 'as' => 'HomeOwner.account.create.success']);
	});
	Route::group(['prefix' => 'transaction'] , function(){
		Route::get('/list/' ,  ['uses' => 'TransactionController@show' , 'as' => 'HomeOwner.transaction.list']);
		Route::get('/ledger/' ,  ['uses' => 'TransactionController@ledger' , 'as' => 'HomeOwner.transaction.ledger']);
		Route::get('/create/', ['uses' => 'UserController@create' , 'as' => 'HomeOwner.account.create']);
		Route::get('/search/', ['uses' => 'UserController@search' , 'as' => 'HomeOwner.account.search']);
		Route::get('/create/success', ['uses' => 'UserController@store' , 'as' => 'HomeOwner.account.create.success']);
	});
	Route::group(['prefix' => 'reservation'] , function(){
		Route::get('/create/',['uses' => 'ReservationController@create' , 'as' => 'HomeOwner.reservation.create']);
	});
});
