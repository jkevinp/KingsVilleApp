<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;
use Illuminate\Http\Request;
use KingsVilleApp\Repositories\Contracts\HomeOwnerContract as HOC;
class HomeOwnerController extends Controller {
	public function __construct(HOC $hoc){
		$this->homeOwner = $hoc;
	}
	public function index(){
		$users = $this->homeOwner->all();
		return view('default.blade.index')->with('users' , $users);
	}
	public function create(){
		return view('default.blade.create');
	}
	public function store(){

	}
}
