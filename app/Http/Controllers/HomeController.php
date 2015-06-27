<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\User;
use KingsVilleApp\Repositories\Contracts\ContentsContract;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(ContentsContract $cc){
		$this->contentsContract = $cc;
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(){
		$contents = $this->contentsContract->all();
		return view('user.blade.home')->withContents($contents);
	}
	public function login(){
		return view('auth.login');
	}

}
