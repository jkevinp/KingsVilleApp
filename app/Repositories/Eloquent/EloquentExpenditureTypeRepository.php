<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\ExpenditureTypeContract;
use KingsVilleApp\ExpenditureType as E;
use KingsVilleApp\Helpers\cHelpers as c;
class EloquentExpenditureTypeRepository implements ExpenditureTypeContract{
	public function find($id){
		return E::find($id);
	}
	public function all(){
		return E::all();
	}
	public function count(){
		return E::all()->count();
	}
	public function findTrash($id){
		return E::onlyTrashed()->where('id','=' , $id)->first();
	}
	public function trashAll(){
		return E::onlyTrashed()->get();
	}
	public function store($param){
		$param['id'] = c::GenerateId('bt' , str_random(1));
		if(c::validate( $param , (new E)->rules))
			return E::create($param);
	}
	public function changeStatus($id){
		$fee = $this->find($id);
		if($fee){
			if($fee->status == 'inactive')$fee->status = 'active';
			else $fee->status = 'inactive';
			return $fee->save();
		}
		return false;
	}
	public function edit($id, $param){

	}
	public function findBy($field, $param){
		return E::where($field, '=' , $param)->get()->first();
	}
	public function findAllBy($field, $param){
		return E::where($field, '=' , $param)->get();
	}
	public function search($query){
		return E::where('firstname', 'like', '%'.$query.'%')->get();
	}
	public function getForm(){
		return (new E)->getForm();
	}
	public function getFillable(){
		$model = (new E);
		$fields =  $model->form;
		dd($fields);
		$showableFields = [];
		foreach ($fields as $key => $value) {
			if(!in_array($value , $model->hidefields))
				array_push($showableFields, $value);
		}
		return $showableFields;
	}
}