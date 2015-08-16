<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Property;

class PropertyController extends Controller {
	public function __construct(){
	}	
	public function listProperty(){

	}
	public function create(){
		return view('self.blade.empty.form')->withForm(Property::getForm())->withRoute(route('User.reservable.store'))->with('formTitle' , 'Create new  Property');
	}
	public function store(Request $request){
		
	}
	public function changeStatus($id){
		
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
