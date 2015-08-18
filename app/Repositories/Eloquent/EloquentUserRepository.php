<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\UserContract;
use KingsVilleApp\Repositories\Contracts\MailContract;
use KingsVilleApp\User;
use KingsVilleApp\Helpers\cHelpers as c;
class EloquentUserRepository implements UserContract{
	public function find($id){
		return User::find($id);
	}
	public function all(){
		return User::all();
	}
	public function count(){
		return User::all()->count();
	}
	public function store($param){
		$user = User::where('email' ,'=' ,$param['email'])->get()->count();
		if($user != 0)return false;
		else {
			$param['id'] = c::GenerateId('user' , str_random(3));
			$param['linktoken'] =  sha1(date('Y-m-dH:i:s'));
			$param['status'] = 'inactive'; 
			$newUser = User::create($param);
			return $newUser;
		}
	}
	public function changeStatus($id){
		$user = $this->find($id);
		if($user){
			if($user->status == 'inactive')$user->status = 'active';
			else $user->status = 'inactive';
			return $user->save();
		}
		return false;
	}
	public function edit($id, $param){

	}
	public function getList($param){
	
	}
	public function findBy($field, $param , $operator = false){
		if(!$operator) $operator = '=';
		return User::where($field, $operator , $param)->first();
	}
	public function findAllBy($field, $param , $operator = false){
		if(!$operator) $operator = '=';
		return User::where($field, $operator , $param);
	}
	public function search($query){
		return User::where('firstname', 'like', '%'.$query.'%')->get();
	}
	public function getRules($ruleName){
		return ((new User)->rules[$ruleName]);
	}
}