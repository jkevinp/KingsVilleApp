<?php namespace KingsVilleApp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model {
	use SoftDeletes;
	protected $table = 'property';
	protected $fillable=[	'id',
							'account_id',
							'name',
							'size',
							'unit',
							'type',
							'address',
							'created_at',
							'updated_at',
							'moved_in'
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
    protected $dates = ['deleted_at' , 'created_at' , 'updated_at' , 'moved_in'];
	public function getForm(){
		return Helpers\cHelpers::MakeForm($this->form);
	}
}
