<?php 
namespace KingsVilleApp;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Fee extends Model {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'fee';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at' , 'created_at' , 'updated_at'];
	protected $fillable = ['id', 'name' ,'type' ,'transactiontype' ,'status', 'rate'];
	public $hidefields = ['id' , 'status'];
	public $form =  [
						'name' => ['type'=>'text'],
						'transactiontype' => ['type' => 'select' , 'values' => ['water' => 'water' , 'annual' => 'annual']],
						'type' => [
												'type'=>'select' , 
												'values' => ['fixed' => 'By Fixed value' ,'percentage'=>'By Percentage']

											],
						'status' => ['type'=>'select' , 'values' => ['active' => 'Active' , 'inactive' => 'Inactive']],
						'rate' =>   ['type' => 'number']
					];
	public $rules = [
						'name' => 'required|unique:fee'
					];


	public function getForm(){
		return Helpers\cHelpers::MakeForm($this->form);
		
	}
}
/*SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='kingsvilledb' 
    AND `TABLE_NAME`='users';*/