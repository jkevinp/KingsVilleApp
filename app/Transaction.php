<?php namespace KingsVilleApp;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
	use SoftDeletes;
		public $incrementing = false;
	protected $table = 'transaction';
	protected $fillable = ['id' , 'name' , 'account_id' , 'description', 'amount' , 'date_charged' , 'due_date',
							'status',
							'deleted_at', 'created_at' ,'updated_at'];
    protected $dates = ['deleted_at'];
    public function user(){
	     return $this->belongsTo('users' ,'account_id');
	}
}
