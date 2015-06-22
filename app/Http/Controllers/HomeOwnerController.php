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
	public function search(Request $request){
		if(!$request->has('search-user')){
			return redirect()->back();
		}
		$q = $request->input('search-user');
		$users= $this->homeOwner->search($q);
		
		return view('default.blade.index')->withUsers($users);
	}
}
