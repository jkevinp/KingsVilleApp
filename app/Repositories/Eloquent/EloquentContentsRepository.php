<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\ContentsContract;
use KingsVilleApp\Contents;
use Auth;
use KingsVilleApp\Helpers\cHelpers as c;
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
		$param['id'] = c::GenerateId('Ann' , str_random(3));
		return Contents::create($param);
	}
	public function edit($id, $param){

	}
	public function search($query){
		
	}
	public function getForm(){
		return (new Contents)->getForm();
	}
}