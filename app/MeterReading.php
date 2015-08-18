<?php namespace KingsVilleApp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeterReading extends Model {
use SoftDeletes;
	protected $table = 'meterreadings';
	protected $fillable = [
							'id',
							'meter_id',
							'lastreading',
							'currentreading',
							'readingdate',
							'details',
							];
	public $hidefields =  [];
	public $form =  [
						
						'lastreading' => ['type' => 'number' , 'others' =>  ['readonly']],
						'currentreading' => ['type' => 'number'],
						'details' => ['type' => 'textarea']
						
						
					];
	public $rules = [
						'meter_id' => 'required|exists:meter,id',
						'readingdate' => 'required|date',
						'currentreading' => 'required|numeric',
						'lastreading' => 'required|numeric'

					];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at' , 'readingdate'];
    public function user(){
		return $this->belongsTo('KingsVilleApp\User' , 'userid');
	}
	public function meter(){
		return $this->belongsTo('KingsVilleApp\Meter' , 'id');
	}
	public function getForm(){
		return Helpers\cHelpers::MakeForm($this->form);
	}
}
