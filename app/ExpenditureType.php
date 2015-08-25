<?php 
namespace KingsVilleApp;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ExpenditureType extends Model {

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $incrementing = false;
	protected $table = 'expendituretype';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at' , 'created_at' , 'updated_at'];
	protected $fillable = ['id', 'name' ,'description' , 'user_id'];
	public $hidefields = ['id'];
	public $form =  [
						'name' => ['type'=>'text'],
						'description' => ['type' => 'textarea']
					];
	public $rules = [
						'name' => 'required|unique:billtype',
						'user_id' => 'required|exists:users,id'
					];


	public function getForm(){
		return Helpers\cHelpers::MakeForm($this->form);	
	}
	public function fee(){
		return $this->belongsTo('KingsVilleApp\Fee' , 'billtype_id');
	}
}
/*SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='kingsvilledb' 
    AND `TABLE_NAME`='users';*/