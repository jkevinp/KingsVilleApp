<?php namespace KingsVilleApp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meter extends Model {
use SoftDeletes;
	protected $table = 'meter';
	protected $fillable = [
							'id',
							'user_id',
							'readingunit',
							'status',
							'details',
							];



	public $hidefields =  [];
	public $form =  [
						'readingunit' => ['type' => 'select' , 'values' => ['cubicmeter' => 'Cubic Meter(m^3)' , 'cubicfeet' => 'Cubic Feet(ft.^3)']],
						'details' => ['type' => 'textarea'],
						'status' => ['type' => 'select' , 'values' => ['active' => 'active' , 'inactive'=>'inactive']]
					];
	
	public $rules = [
						'readingunit' => 'required',
						'user_id' => 'required|exists:users,id|unique:meter,user_id|min:1',
						'status' => 'required'
					];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    public function meterreading()
	{
		return $this->hasMany('KingsVilleApp\MeterReading' , 'meter_id');
	}
    public function user(){
		return $this->belongsTo('KingsVilleApp\User' , 'userid');
	}
    protected $dates = ['deleted_at' , 'created_at' , 'updated_at'];
	public function getForm(){
		return Helpers\cHelpers::MakeForm($this->form);
	}
}
