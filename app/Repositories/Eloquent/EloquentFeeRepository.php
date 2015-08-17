<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\FeeContract;
use KingsVilleApp\Fee;
use KingsVilleApp\Helpers\cHelpers as c;
class EloquentFeeRepository implements FeeContract{
	public function find($id){
		return Fee::find($id);
	}
	public function all(){
		return Fee::all();
	}
	public function count(){
		return Fee::all()->count();
	}
	public function store($param){
		$param['id'] = c::GenerateId('fee'.$param['type'] , $param['name']);
		$param['status']= 'active';
		return Fee::create($param);
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
		return Fee::where($field, '=' , $param)->get()->first();
	}
	public function search($query){
		return Fee::where('firstname', 'like', '%'.$query.'%')->get();
	}
	public function getForm(){
		return (new Fee)->getForm();
	}

	public function getFillable(){
		$model = (new Fee);
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