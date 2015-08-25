<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\BillingDetailContract;
use KingsVilleApp\BillingDetail;
use KingsVilleApp\Helpers\cHelpers as c;
class EloquentBillingDetailRepository implements BillingDetailContract{
	public function find($id){
		return BillingDetail::find($id);
	}
	public function all(){
		return BillingDetail::all();
	}
	public function insert($bill , $fees , $meterreading){
		$billingDetails = [];
		$amount = 0;$unitTotal = 0; $consumption = $meterreading->consumption;
		foreach ($fees as $fee) {
			$id = c::GenerateId('bd' , str_random(3));
			if($fee->type == 'fixed'){
				$amount += $fee->rate;
				$unitTotal += $fee->rate;
				array_push($billingDetails, [
												'id' =>  $id,
												'fee_id' => $fee->id,
												'amount' => $fee->rate,
												'unit' => 1
											]
						);
			}
			else if($fee->type =='unit'){
				$amount += $consumption * $fee->rate;
				$unitTotal +=$consumption * $fee->rate;
				array_push($billingDetails, [
												'id' => $id,
												'fee_id' => $fee->id,
												'amount' => $consumption* $fee->rate,
												'unit' => $consumption
											]
						);
			}
		}
		foreach ($fees as $fee){
			if($fee->type== 'percentage'){
				$amount +=($unitTotal * ($fee->rate /100));
				array_push($billingDetails, [
												'id' => $id,
												'fee_id' => $fee->id,
												'amount' => ($unitTotal * ($fee->rate /100)),
												'unit' => 1
											]
						);
			}
		}
		for($x=  0 ; $x < count($billingDetails); $x++){
			$billingDetails[$x]['bill_id'] = $bill->id;
		}
		return BillingDetail::insert($billingDetails);
	}
	public function count(){
		return BillingDetail::all()->count();
	}
	public function findTrash($id){
		return BillingDetail::onlyTrashed()->where('id','=' , $id)->first();
	}
	public function trashAll(){
		return BillingDetail::onlyTrashed()->get();
	}
	public function store($param){
		$param['id'] = c::GenerateId('bd' , str_random(5));
		$param['status']= 'due';
		if(c::validate( $param , (new BillingDetail)->rules))
			return BillingDetail::create($param);
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
		return BillingDetail::where($field, '=' , $param)->get()->first();
	}
	public function findAllBy($field, $param){
		return BillingDetail::where($field, '=' , $param)->get();
	}
	public function search($query){
		return BillingDetail::where('firstname', 'like', '%'.$query.'%')->get();
	}
	public function getForm(){
		return (new BillingDetail)->getForm();
	}
	public function getFillable(){
		$model = (new BillingDetail);
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