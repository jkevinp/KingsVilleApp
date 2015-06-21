<?php namespace KingsVille\Http\Controllers;

use KingsVille\Http\Requests;
use KingsVille\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeOwnerController extends Controller {
	public function index(){
		return view('default.blade.index');
	}
	public function create(){
		return view('default.blade.create');
	}
}
