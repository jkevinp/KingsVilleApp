<?php 
namespace KingsVilleApp;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BillingDetail extends Model {

	use SoftDeletes;
	public $incrementing = false;
	protected $table = 'billingdetail';
	protected $dates = ['deleted_at' , 'created_at' , 'updated_at'];
	protected $fillable = 	[
								'id',
								'bill_id',
								'amount',
								'fee_id',
								'unit'
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
						'id' => 'required',
						'amount'  => 'required|numeric|min:0',
						'bill_id' => 'required|exists:bill,id',
						'fee_id' => 'required|exists:fee,id',
						'unit' => 'required|numeric|min:1'
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
	public function bill(){
		return $this->belongsTo('KingsVilleApp\Bill' , 'bill_id', 'id');
	}
	public function fee(){
		return $this->hasOne('KingsVilleApp\Fee', 'id' , 'fee_id');
	}
}
/*SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='kingsvilledb' 
    AND `TABLE_NAME`='users';*/