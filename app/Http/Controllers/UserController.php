<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use KingsVilleApp\Repositories\Contracts\HomeOwnerContract as HOC;
use KingsVilleApp\Repositories\Contracts\UserContract as UC;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	function __construct(HOC $homeOwnerContract, UC $userContract){
		$this->middleware('auth.basic');
		$this->homeOwner = $homeOwnerContract;
		$this->user = $userContract;
	}
	public function index()
	{
		$users = $this->user->all();
		return view('user.blade.show')->with('users' , $users);
	}
	public function create()
	{
		return view('user.blade.create');
	}
	public function store()
	{
		return view('user.blade.success');
	}
	public function show($id)
	{
		//
	}
	public function edit($id)
	{
		//
	}
	public function update($id)
	{
		//
	}
	public function destroy($id)
	{
		
	}
	public function search(Request $request){
		if(!$request->has('search-user')){
			return redirect()->back();
		}
		$q = $request->input('search-user');
		$users= $this->user->search($q);
		return view('user.blade.show')->withUsers($users);
	}
	public function logout(){
		Auth::logout();
		return redirect(route('Guest.home'));
	}
}
