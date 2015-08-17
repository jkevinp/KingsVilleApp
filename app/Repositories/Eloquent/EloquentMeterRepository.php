<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\UserContract;
use KingsVilleApp\Repositories\Contracts\MailContract;
use KingsVilleApp\Repositories\Contracts\MeterContract;
use KingsVilleApp\User;
use KingsVilleApp\Meter;
use KingsVilleApp\MeterReading;
use KingsVilleApp\Helpers\cHelpers as c;
use DB;
class EloquentMeterRepository implements MeterContract{
	public function allMeter(){
		return Meter::all();
	}
	public function allMeterReading(){
		return MeterReading::all();
	}
	public function find($id){
		return User::find($id);
	}
	public function all(){
		return User::all();
	}
	public function count(){
		return User::all()->count();
	}
	public function storeMeterReading($param){
	
	}
	public function storeMeter($param){

		if($count = $this->findBy('user_id' , $param['user_id'])->count() > 0) return false;
		
		$param['id'] = c::GenerateId('meter' , str_random(1));
		return Meter::create($param);
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
}