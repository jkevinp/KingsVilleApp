<?php namespace KingsVilleApp\Helpers;	

use Form;
class cHelpers{
	public static function MakeForm($formArray){
		$snip = '';
		foreach ($formArray as $property => $value) {
			$snip.= '<div class="form-group ">';
			$snip.= '<label for="'.$property.'" class="control-label col-lg-2">'. ucfirst ($property).'*</label>';
			$snip.= '<div class="col-lg-3">';
			switch($value['type']){
				case 'number':
				$snip.=  Form::number($property , null,['class' => 'form-control' , 'id' => $property , 'placeholder' => $property , 'required' => '']);
				break;
				case 'text':
					$snip.=  Form::text($property , null,['class' => 'form-control' , 'id' => $property , 'placeholder' => $property , 'required' => '']);
				break;
				case 'select':
					$snip.= Form::select($property, $value['values'] , null, ['class' => 'form-control' , 'id' => $property]);
				break;
				case 'textarea':
					$snip.=  Form::textarea($property , null,['class' => 'form-control' , 'style' => 'resize:none;' ,'id' => $property , 'placeholder' => $property , 'required' => '']);
				break;
			}
			$snip .= '</div> </div>';
		}
		return $snip;
	}
}