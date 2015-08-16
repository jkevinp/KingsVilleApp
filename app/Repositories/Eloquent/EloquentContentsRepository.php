<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\ContentsContract;
use KingsVilleApp\Contents;
use Auth;
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
		$param['id'] = 'Ann'. substr($param['title'], 0, 1).date('YmdHis');
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