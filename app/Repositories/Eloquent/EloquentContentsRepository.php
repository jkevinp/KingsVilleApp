<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\ContentsContract;
use KingsVilleApp\Contents;
class EloquentContentsRepository implements ContentsContract{
	public function find($id){
		return Contents::find($id);
	}
	public function all(){
		return Contents::all();
	}
	public function count(){
		return Contents::all()->count();
	}
	public function store($param){

	}
	public function edit($id, $param){

	}
	public function search($query){
		
	}
}