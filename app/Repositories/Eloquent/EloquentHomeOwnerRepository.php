<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\HomeOwnerContract;
use KingsVilleApp\HomeOwner;
class EloquentHomeOwnerRepository implements HomeOwnerContract{
	public function find($id){
		return HomeOwner::find($id);
	}
	public function all(){
		return HomeOwner::all();
	}
	public function count(){
		return HomeOwner::all()->count();
	}
	public function store($param){

	}
	public function edit($id, $param){

	}
	public function search($query){
		return HomeOwner::where('firstname', 'like', '%'.$query.'%')->get();
	}
}