<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;

use Illuminate\Http\Request;
use KingsVilleApp\Repositories\Contracts\MeterContract as mc;
use KingsVilleApp\Repositories\Contracts\UserContract as uc;
use KingsVilleApp\Helpers\cHelpers as c;
class MeterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(mc $mc , uc $uc){
		$this->meter = $mc;
		$this->user  = $uc;
	}
	public function createMeterReading(){
		return view('self.blade.empty.form')
				->with('formTitle' , 'Create new Meter Reading')
				->with('form' , $this->meter->getMeterReadingForm())
				->withRoute(route('User.meter.reading.store'));
	}
	public function createMeter(){
		$form = $this->meter->getMeterForm();
		$list = $this->meter->getNoMeter();
		$user = ['user_id' => ['type' => 'select','values' => $list,'class' => '']];
		$injectjs = "$('#user_id').selectize();";
		return view('self.blade.empty.form')
				->with('formTitle' , 'Create new Meter')
				->with('form' , $form)
				->withRoute(route('User.meter.store'))
				->withInject(c::MakeForm($user))
				->with('injectjs' , $injectjs);
	}
	public function storeMeter(Request $request){
		$input = $request->all();
		if($this->meter->storeMeter($input))return redirect()->back()->with('flash_message' , 'Successfully Added new meter');
		else return redirect()->back()->withErrors('Unable to save new meter.');
	}
	public function storeMeterReading(Request $request){

	}
	public function listMeter(){
		return view('self.blade.meter.list')->withObj($this->meter->allMeter());
	}
	public function listMeterReading(){
		return view('self.blade.meterreading.list')->withObj($this->meter->allMeterReading());
	}
}
