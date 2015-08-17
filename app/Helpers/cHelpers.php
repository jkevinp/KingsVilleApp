<?php namespace KingsVilleApp\Helpers;	

use Form;
class cHelpers{
	public static function MakeForm($formArray){
		$snip = '';
		foreach ($formArray as $property => $value) {
			$snip.= '<div class="form-group ">';
			$snip.= '<label for="'.$property.'" class="control-label col-lg-2">'. ucfirst ($property).'*</label>';
			$snip.= '<div class="col-lg-3">';

			if(array_key_exists('class', $value))
				$class = $value['class'];
			else $class = 'form-control';
			if(array_key_exists('id', $value))
				$id = $value['id'];
			else $id = $property;
			if(array_key_exists('placeholder', $value))
				$placeholder = $value['placeholder'];
			else $placeholder = $property;
			
			switch($value['type']){
				case 'number':

				$snip.=  Form::number($property , null,['class' => $class , 'id' => $id , 'placeholder' => $placeholder , 'required' => '']);
				break;
				case 'text':
					$snip.=  Form::text($property , null,['class' => $class , 'id' => $id , 'placeholder' => $placeholder , 'required' => '']);
				break;
				case 'select':
				if(!in_array('class', $value))
					$snip.= Form::select($property, $value['values'] , null, ['class' => $class , 'id' => $id]);
				else{
					dd('st');
					$snip.= Form::select($property, $value['values'] , null, ['class' => $class , 'id' => $id]);	
				}
				break;
				case 'textarea':
					$snip.=  Form::textarea($property , null,['class' => $class , 'style' => 'resize:none;' ,'id' => $id , 'placeholder' => $placeholder , 'required' => '']);
				break;
			}
			$snip .= '</div> </div>';
		}
		return $snip;
	}
	public static function GenerateId($prefix ,$suffix)
	{
		$micro_date = microtime();
		$date_array = explode(" ",$micro_date);
		$date = date("YmdHis",$date_array[1]);
		return $prefix.str_random(3).$date.$suffix;
	}
}