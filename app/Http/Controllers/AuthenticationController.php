<?php namespace KingsVilleApp\Http\Controllers;
use Auth;
use Illuminate\Http\Request;	
class AuthenticationController extends Controller {
	public function login(){
		return view('auth.login');
	}
	public function signin(Request $request){
		$email = $request->input('email');
		$password = $request->input('password');
		if (Auth::attempt(['email' => $email, 'password' =>$password]))
        {
        	if(Auth::user()->usergroup == 'admin')
          		return redirect(route('User.index'));
          	else if(Auth::user()->usergroup == 'homeowner')
          		return redirect(route('HomeOwner.index'));
        }
        else
        {
        	return redirect()->back()->withErrors('Invalid Login credentials.');	
        }
	}
	public function logout(){
		Auth::logout();
		return redirect(route('Guest.home'));
	}
}
