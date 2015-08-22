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
	public $incrementing = false;
	protected $table = 'fee';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at' , 'created_at' , 'updated_at'];
	protected $fillable = ['id', 'name' ,'type' ,'billtype_id' ,'status', 'rate'];
	public $hidefields = ['id' , 'status'];
	public $form =  [
						'name' => ['type'=>'text'],
						'billtype_id' => ['type' => 'select' , 'values' => ['water' => 'water' , 'annual' => 'annual']],
						'type' => [
												'type'=>'select' , 
												'values' => ['fixed' => 'By Fixed value' ,'percentage'=>'By Percentage' , 'unit'=>'Per Unit']

											],
						'status' => ['type'=>'select' , 'values' => ['active' => 'Active' , 'inactive' => 'Inactive']],
						'rate' =>   ['type' => 'number']
					];
	public $rules = [
						'name' => 'required|unique:fee',
						'billtype_id' => 'required|exists:billtype,id',
						'rate' => 'numeric|min:1'
					];


	public function getForm(){
		return Helpers\cHelpers::MakeForm($this->form);
		
	}
	public function billtype(){
		return $this->hasMany('KingsVilleApp\BillType', 'id', 'billtype_id');
	}
}
/*SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='kingsvilledb' 
    AND `TABLE_NAME`='users';*/