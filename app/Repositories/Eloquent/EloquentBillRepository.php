<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\BillContract;
use KingsVilleApp\Bill;
use KingsVilleApp\Helpers\cHelpers as c;
class EloquentBillRepository implements BillContract{
	public function find($id){
		return Bill::find($id);
	}
	public function all(){
		return Bill::all();
	}
	public function count(){
		return Bill::all()->count();
	}
	public function findTrash($id){
		return Bill::onlyTrashed()->where('id','=' , $id)->first();
	}
	public function trashAll(){
		return Bill::onlyTrashed()->get();
	}
	public function store($param , $type){
		$param['id'] = c::GenerateId('bill' , str_random(5));
		$param['status']= 'due';
		if(c::validate( $param , (new Bill)->rules[$type]))
			return Bill::create($param);
	}
	public function changeStatus($id){
		$fee = $this->find($id);
		if($fee){
			if($fee->status == 'due')$fee->status = 'paid';
			else $fee->status = 'due';
			return $fee->save();
		}
		return false;
	}
	public function edit($id, $param){

	}
	public function findBy($field, $param){
		return Bill::where($field, '=' , $param)->get()->first();
	}
	public function findAllBy($field, $param){
		return Bill::where($field, '=' , $param)->get();
	}
	public function search($query){
		return Bill::where('firstname', 'like', '%'.$query.'%')->get();
	}
	public function getForm(){
		return (new Bill)->getForm();
	}
	public function getFillable(){
		$model = (new Bill);
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