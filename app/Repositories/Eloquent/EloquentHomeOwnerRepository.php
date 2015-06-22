<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\HomeOwnerContract;
use KingsVilleApp\User;
class EloquentHomeOwnerRepository implements HomeOwnerContract{
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