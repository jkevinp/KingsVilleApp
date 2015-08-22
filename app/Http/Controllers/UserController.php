<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;
use KingsVilleApp\Repositories\Contracts\UserContract as UC;
use KingsVilleApp\Repositories\Contracts\MailContract;
use KingsVilleApp\Repositories\Contracts\ContentsContract;
use KingsVilleApp\Http\Middleware;
use KingsVilleApp\Events\AccountEvents;
use Illuminate\Http\Request;
use Auth;
use KingsVilleApp\Helpers\cHelpers as c;
class UserController extends Controller {
	protected $authuser;
	function __construct(UC $userContract , MailContract $mailContract , ContentsContract $cc){
		$this->middleware('authenticate' ,  ['except' => ['forgotPassword' , 'sendPassword' , 'verify' , 'password']]);
		$this->user = $userContract;
		$this->content = $cc;
		$this->mailer = $mailContract;
		$authuser = Auth::user();
	}
	public function profile($id){
		$user = $this->user->find($id);
		return view('user.blade.accounts.profile')->with('user' , $user);
	}
	public function indexHomeowner(){
		return view('homeowner.blade.home');
	}
	public function indexUser(){
		return view('user.blade.home')->with('contents' , $this->content->all());
	}
	public function create(){
		return view('user.blade.accounts.create');
	}
	//->where('id', '[0-9]+');
	public function store(Request $request){
		$input  = $request->all();
		$result = $this->user->store($input);
		if(!$result)return redirect()->back()->withInput($input)->withErrors('E-mail already in use.');
		\Event::fire(new AccountEvents($result , 'Verify Account' , 'emails.registration'));
		return view('user.blade.accounts.success')->withUser($result);
	}
	public function changeStatus($id){
		if($this->user->changeStatus($id)) return redirect()->back()->with('flash_message' , 'Changed Status of user!');
		else return redirect()->back()->with('errors' , 'Unable to change user status.');
	}
	public function show($id){
		return view('user.blade.accounts.show')->with('users' , $users);
	}
	public function listUser(){
		$users = $this->user->all();
		return view('user.blade.accounts.list')->with('users' , $users);
	}
	public function edit($id){//validation done
		$user = $this->user->find($id);
		if($user)return view('user.blade.accounts.edit')->with('user' , $user);
		else return redirect(route('User.account.list'))->withErrors('User not found');
	}
	public function update(Request $request){
		$input = $request->all();
		$user = $this->user->findBy('linktoken', $input['linktoken']);
		$user->password = bcrypt($input['password']);
		$result = $user->save();
		if($result)return redirect(route('auth.login'))->withErrors('Successfully changed password');
		else return redirect()->back()->withErrors('Change Password Failed');
	}
	public function password(Request $request){
		$input = $request->all();
		$user = $this->user->findBy('linktoken', $input['linktoken']);
		$user->password = bcrypt($input['password']);
		$user->status ='active';
		$result = $user->save();
		if($result)return redirect(route('auth.login'))->withErrors('Successfully changed password');
		else return redirect()->back()->withErrors('Change Password Failed');
	}
	public function forgotPassword(){
		return view('user.blade.accounts.forgotpassword');
	}
	public function sendPassword(Request $request){
		$input = $request->all();
		if(c::validate($input , $this->user->getRules('forgot'))){
			$user = $this->user->findBy('email', $input['email']);
			\Event::fire(new AccountEvents($user, 'Password Reset' , 'emails.forgotpassword'));
			return redirect()->back()->with('flash_message','Please Check your Email-address');
		}
		return redirect()->back();
	}
	public function destroy($id){
		
	}
	public function verify($token){
		return view('user.blade.accounts.verify')->with('linktoken' , $token);
	}
	public function search(Request $request){
		if(!$request->has('search-user')){
			return redirect()->back();
		}
		$q = $request->input('search-user');
		$users= $this->user->search($q);
		return view('user.blade.accounts.show')->withUsers($users);
	}
	public function ajaxSearch(Request $request){
		if($request->ajax()){
			$q = $request->input('param');
			$users= $this->user->findBy('id' , '%'.$q.'%' , 'Like');
			if($users->count() >0 )
			return $users;
			return null;
		}
	}
	public function logout(){
		Auth::logout();
		return redirect(route('Guest.home'));
	}
}
