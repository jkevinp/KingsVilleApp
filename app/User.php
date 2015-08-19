<?php 
namespace KingsVilleApp;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
							'id',
							'firstname',
							'email',
							'password',
							'middlename',
							'lastname',
							'address',
							'landline',
							'mobile',
							'gender',
							'propertyaddress',
							'birthdate',
							'usergroup',
							'status' ,
							'linktoken'
							];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
	public $rules = [
						'forgot' => [
										'email' => 'required|email|exists:users',
										'email1' => 'required|email|same:email'
									]	
					];

	public function transactions()
	{
		return $this->hasMany('KingsVilleApp\Transaction' , 'account_id');
	}
	public function contents()
	{
		return $this->hasMany('KingsVilleApp\Contents');
	}
	public function meter()
	{
		return $this->hasMany('KingsVilleApp\Meter' , 'user_id');
	}
	public function meterreadings()
	{
		return $this->hasMany('KingsVilleApp\MeterReadings');
	}

}
/*SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='kingsvilledb' 
    AND `TABLE_NAME`='users';*/