<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\BillTypeContract;
use KingsVilleApp\BillType;
use KingsVilleApp\Helpers\cHelpers as c;
class EloquentBillTypeRepository implements BillTypeContract{
	public function find($id){
		return BillType::find($id);
	}
	public function all(){
		return BillType::all();
	}
	public function count(){
		return BillType::all()->count();
	}
	public function findTrash($id){
		return BillType::onlyTrashed()->where('id','=' , $id)->first();
	}
	public function trashAll(){
		return BillType::onlyTrashed()->get();
	}
	public function store($param){
		$param['id'] = c::GenerateId('bt' , str_random(1));
		
		if(c::validate( $param , (new BillType)->rules))
			return BillType::create($param);
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
		return BillType::where($field, '=' , $param)->get()->first();
	}
	public function findAllBy($field, $param){
		return BillType::where($field, '=' , $param)->get();
	}
	public function search($query){
		return BillType::where('firstname', 'like', '%'.$query.'%')->get();
	}
	public function getForm(){
		return (new BillType)->getForm();
	}
	public function getFillable(){
		$model = (new BillType);
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