<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;

use Illuminate\Http\Request;

use KingsVilleApp\Repositories\Contracts\ReservableContract;

class ReservableController extends Controller {
	public function __construct(ReservableContract $rc){
		$this->reservable =$rc;
	}	
	public function listReservable(){
		$obj = $this->reservable->all();
		return view('self.blade.reservable.list')->withObj($obj);
	}
	public function create(){
		return view('self.blade.empty.form')->withForm($this->reservable->getForm())->withRoute(route('User.reservable.store'))->with('formTitle' , 'Create new Reservable Property');
	}
	public function store(Request $request){
		$input = $request->all();
		if($this->reservable->store($input))
			return redirect(route('User.reservable.list'))->withMessage('Successfully created new Reservable');
		else 
			return redirect()->back()->withErrors('Something went wrong, Unable to save reservable');
	}
	public function changeStatus($id){
		if($this->reservable->changeStatus($id))
			return redirect()->back()->with('flash_message' , 'Changed Status of property');
		else 
			return redirect()->back()->with('errors' , 'Unable to change property status.');
	}
	public function show($id){
		
	}
	public function edit($id){
		
	}
	public function update($id){
		
	}
	public function destroy($id){
		
	}

}
