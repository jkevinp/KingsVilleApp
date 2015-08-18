<?php namespace KingsVilleApp;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Validation\Validator;
class CustomModel extends Model {

	public $rules;
	public function validate($input){
		$v = Validator::Make($input , $this->rules);
		return $v->passes();
	}
	public function __construct($rules){
		$this->rules = $rules;
	}

}
