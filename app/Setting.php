<?php 
namespace KingsVilleApp;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Setting extends Model {
	use SoftDeletes;
	public $incrementing = true;
	protected $table = 'setting';
	protected $dates = ['deleted_at' , 'created_at' , 'updated_at' , 'datestart' , 'dateend' ,'duedate'];
	protected $fillable = 	[
								'id',
								'name',
								'target_table',
								'target_column',
								'value',
								'user_id'
							];
	public $hidefields = [];
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
						'id' => 'required|unique:bill',
						'status' => 'required',
						'meter_id' => 'required|exists:meter,id',
						'datestart' => 'required|date',
						'dateend'   => 'required|date',
						'duedate' =>'required|date',	
						'amount'  => 'required|numeric|min:0',
						'meterreadings_id' => 'required|exists:meterreadings,id'
					];
	public function getForm(){
		return Helpers\cHelpers::MakeForm($this->form);
	}
	public function meter(){
		return $this->belongsTo('KingsVilleApp\Meter' , 'meter_id' , 'id');
	}
	public function meterreading(){
		return $this->belongsTo('KingsVilleApp\MeterReading' , 'meterreadings_id' , 'id');
	}
	public function billtype(){
		return $this->hasMany('KingsVilleApp\BillType' , 'id', 'billtype_id');
	}
	public function billdetail(){
		return $this->hasMany('KingsVilleApp\BillingDetail' , 'bill_id' , 'id');
	}
}
/*SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='kingsvilledb' 
    AND `TABLE_NAME`='users';*/