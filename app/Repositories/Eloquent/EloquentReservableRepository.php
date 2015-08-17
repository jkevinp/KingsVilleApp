<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\ReservableContract;
use KingsVilleApp\Reservable;
use KingsVilleApp\Helpers\cHelpers as c;
class EloquentReservableRepository  implements ReservableContract{
	public function find($id){
		return Reservable::find($id);
	}
	public function all(){
		return Reservable::all();
	}
	public function count(){
		return Reservable::all()->count();
	}
	public function store($param){
		$param['id'] =  c::GenerateId('Resprop' , str_random(3));
		$param['status']= 'active';
		return Reservable::create($param);
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
		return Reservable::where($field, '=' , $param)->get()->first();
	}
	public function search($query){
		return Reservable::where('firstname', 'like', '%'.$query.'%')->get();
	}
	public function getForm(){
		return (new Reservable)->getForm();
	}
	public function getFillable(){
		$model = (new Reservable);
		$fields =  $model->form;
		$showableFields = [];
		foreach ($fields as $key => $value) {
			if(!in_array($value , $model->hidefields))
				array_push($showableFields, $value);
		}
		return $showableFields;
	}
}