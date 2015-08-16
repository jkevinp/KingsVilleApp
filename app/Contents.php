<?php namespace KingsVilleApp;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model {
	protected $table = 'contents';
	protected $fillable = ['id' , 'title' , 'content' , 'userid', 'created_at' ,'updated_at'];
	public $form =  [
						'title' => ['type' => 'text'],
						'content' => ['type' => 'textarea']
					];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $dates = ['created_at'];
	public  function getForm(){
		return Helpers\cHelpers::MakeForm($this->form);
	}
}
