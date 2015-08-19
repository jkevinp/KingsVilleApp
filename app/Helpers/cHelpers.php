<?php namespace KingsVilleApp\Helpers;	

use Form;
use Validator;
use Session;
class cHelpers{

	public static function validate($input, $rules){
		$v = Validator::make($input , $rules);
		if($v->fails())Session::flash('errors' ,$v->messages());
		return $v->passes();
	}
	//form -> self.blade.empty.form
	public static function MakeForm($formArray){
		$snip = '';
		foreach ($formArray as $property => $value) {
			$snip.= '<div class="form-group ">';
			$snip.= '	<label for="'.$property.'" class="control-label col-lg-2">'. ucfirst ($property).'*</label>';
			$snip.= '		<div class="col-lg-10">';
			if(array_key_exists('class', $value))$class = $value['class'];
			else $class = 'form-control';
			if(array_key_exists('id', $value))$id = $value['id'];
			else $id = $property;
			if(array_key_exists('placeholder', $value))$placeholder = ucfirst($value['placeholder']);
			else $placeholder = ucfirst($property);
			$others = '';
			if(array_key_exists('others', $value)){
				foreach ($value['others'] as $key) {
					$others.= $key;
				}
			}
			switch($value['type']){
				case 'number':
					$snip.=  Form::number($property , null,[ $others => ''	, 'class' => $class , 'id' => $id , 'placeholder' => $placeholder , 'required' => '']);
				break;
				case 'date':
					$snip.='<input name="'.$property.'"class="form-control input-medium default-date-picker" size="16" type="text">';
				break;
				case 'text':
					$snip.=  Form::text($property , null,[$others => '', 'class' => $class , 'id' => $id , 'placeholder' => $placeholder , 'required' => '']);
				break;
				case 'select':
					$snip.= Form::select($property, $value['values'] , null, [$others => '', 'class' => $class , 'id' => $id ,''=> $others]);
				break;
				case 'textarea':
					$snip.=  Form::textarea($property , null,[$others => '', 'class' => $class , 'style' => 'resize:none;' ,'id' => $id , 'placeholder' => $placeholder , 'required' => '']);
				break;
			}
			$snip .= '</div> </div>';
		}
		return $snip;
	}
	public static function GenerateId($prefix ,$suffix){
		$micro_date = microtime();
		$date_array = explode(" ",$micro_date);
		$date = date("YmdHis",$date_array[1]);
		return $prefix.str_random(3).$date.$suffix;
	}
}