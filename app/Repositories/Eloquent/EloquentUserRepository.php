<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\UserContract;
use KingsVilleApp\User;

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

	}
	public function edit($id, $param){

	}
	public function search($query){
		return User::where('firstname', 'like', '%'.$query.'%')->get();
	}
}