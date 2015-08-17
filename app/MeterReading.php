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
							'deleted_at',
							'created_at',
							'updated_at'
							];
	public $hidefields =  [];
	public $form =  [
						'name' => ['type' => 'text'],
						'description' => ['type' => 'textarea'],
						'flatrate' => ['type' => 'number'],
						'status' => ['type' => 'select' , 'values' => ['active' => 'active' , 'inactive'=>'inactive']]
					];
	

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
	public function getForm(){
		return Helpers\cHelpers::MakeForm($this->form);
	}
}
