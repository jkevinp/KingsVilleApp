<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\UserContract;
use KingsVilleApp\Repositories\Contracts\MailContract;
use KingsVilleApp\Repositories\Contracts\MeterContract;
use KingsVilleApp\User;
use KingsVilleApp\Meter;
use KingsVilleApp\MeterReading;
use KingsVilleApp\Helpers\cHelpers as c;
use DB;
use DateTime;
class EloquentMeterRepository implements MeterContract{
	public function allMeter(){
		return Meter::all();
	}
	public function allMeterReading(){
		return MeterReading::all();
	}
	public function findMeter($id){
		return Meter::find($id);
	}
	public function storeMeterReading($param){
		//2015-07-18
		$explode = explode('-', $param['readingdate']);
		$param['readingdate'] = $explode[2].'-'.$explode[0].'-'.$explode[1];
		$param['id'] = c::GenerateId('meter-reading' , str_random(1));
		if(c::validate($param , (new MeterReading)->rules)){
			return MeterReading::create($param);
		}
	}
	public function storeMeter($param){
		$param['id'] = c::GenerateId('meter' , str_random(1));
		if(c::validate($param , (new Meter)->rules))return Meter::create($param);
	}

	public function changeStatus($id){
		$user = $this->find($id);
		if($user){
			if($user->status == 'inactive')$user->status = 'active';
			else $user->status = 'inactive';
			return $user->save();
		}
		return false;

	}
	public function edit($id, $param){

	}
	public function findBy($field, $param , $operator = false){
		if(!$operator) $operator = '=';
		return Meter::where($field, $operator , $param)->get();
	}

	
	public function findAllBy($field, $param , $operator = false){
		if(!$operator) $operator = '=';
		return Meter::where($field, $operator , $param);
	}
	public function search($query){
		return Meter::where('firstname', 'like', '%'.$query.'%')->get();
	}
	public function getMeterForm(){
		return (new Meter)->getForm();

	}
	public function getMeterReadingForm(){
		return (new MeterReading)->getForm();
	}
	public function getNoMeter(){
	return DB::table('users')->whereNotExists(function($query){
                $query->select(DB::raw(1))
                      ->from('meter')
                      ->whereRaw('meter.user_id = users.id');
            })->lists('id' , 'id');
       
	}
	public function findMeterTrash($id){
		return Meter::onlyTrashed()->where('id','=' , $id)->first();
	}
	public function trashMeterAll(){
		return Meter::onlyTrashed()->get();
	}
}