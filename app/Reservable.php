<?php namespace KingsVilleApp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservable extends Model {
use SoftDeletes;
	public $incrementing = false;
	protected $table = 'reservable';
	protected $fillable = ['id', 'name' ,'flatrate' ,'status'];
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
