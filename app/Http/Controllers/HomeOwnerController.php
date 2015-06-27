<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;
use Illuminate\Http\Request;
use KingsVilleApp\Repositories\Contracts\HomeOwnerContract as HOC;

class HomeOwnerController extends Controller {
	public function __construct(HOC $hoc){
		$this->middleware('auth.basic');
		$this->homeOwner = $hoc;
	}
	public function index(){
		$homeowners = $this->homeOwner->all();
		return view('homeowner.blade.show')->with('homeowners' , $homeowners);
	}
	public function create(){
		return view('homeowner.blade.create');
	}
	public function store(){
return view('homeowner.blade.success');
	}
	public function search(Request $request){
		if(!$request->has('search-user')){
			return redirect()->back();
		}
		$q = $request->input('search-user');
		$users= $this->homeOwner->search($q);
		return view('homeowner.blade.show')->withUsers($users);
	}
}
