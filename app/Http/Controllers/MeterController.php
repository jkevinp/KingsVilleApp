<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;

use Illuminate\Http\Request;
use KingsVilleApp\Repositories\Contracts\MeterContract as mc;
use KingsVilleApp\Repositories\Contracts\UserContract as uc;
use KingsVilleApp\Repositories\Contracts\FeeContract as fc;
use KingsVilleApp\Repositories\Contracts\BillContract as bc;
use KingsVilleApp\Helpers\cHelpers as c;
class MeterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(mc $mc , uc $uc , fc $fc, bc $bc){
		$this->meter = $mc;
		$this->user  = $uc;
		$this->fee = $fc;
		$this->bill = $bc;
	}
	public function createMeterReading(){
		$meters = $this->meter->allMeter();
		$list = $meters->lists('id' , 'id');
		$form = [
					'meter_id' => ['type' => 'select' , 'values' => $list , 'class' => ''],
					'readingdate' => ['type' => 'date']
				];
		return view('self.blade.empty.form')
				->with('formTitle' , 'Create new Meter Reading')
				->with('form' , $this->meter->getMeterReadingForm())
				->withRoute(route('User.meter.reading.store'))
				->withInject(c::MakeForm($form))
				->with('js' , 'default\js\ajax\meter-reading-create.js')
				->with('col' , '6');
	}
	public function createMeter(){
		$form = $this->meter->getMeterForm();
		$list = $this->meter->getNoMeter();
		if(count($list) == 0)return redirect(route('User.meter.list'))->withErrors('All meters are assigned to each respective meters!');
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
		if($this->meter->storeMeter($input)){

			return redirect()->back()->with('flash_message' , 'Successfully Added new meter');
		}
		else return redirect()->back();
	}
	public function restoreMeter($id){
		$meter = $this->meter->findMeterTrash($id);
		if($meter){
			$meter->restore();
			return redirect()->back()->with('flash_message' , 'Meter has been restored.');
		}
		return redirect()->back()->withErrors('Trashed meter not found!');
	}
	public function storeMeterReading(Request $request){
		$input = $request->all();
		if($meterreading = $this->meter->storeMeterReading($input)){
			$fees = $this->fee->findAllBy('transactiontype' , 'water')->lists('type' , 'rate');
			$amount = 0;
			$consumption = $meterreading->currentreading - $meterreading->lastreading;
			foreach ($fees as $key => $v) {
				if($v == 'fixed')$amount += $key;
				else if($v =='unit')$amount += $consumption * $key;
			}
				
			foreach ($fees as $key => $v){
				if($v == 'percentage')$amount = $amount + ($amount * ($key /100));
			}
			$input['meterreadings_id'] = $meterreading->id;
			
			$input['amount'] = $amount;
			$input['datestart'] = $meterreading->readingdate;
			$input['duedate'] =   $meterreading->readingdate;
			$input['dateend'] =   $meterreading->readingdate;
			$input['meter_id'] = $meterreading->meter_id;
			$input['status'] =  'active';
			dd($amount);
			$bill = $this->bill->store($input);
			if($bill && $meterreading){
				return redirect(route('User.bill.show' , $bill->id));
			}else{
				$bill->delete();
				$meterreading->delete();
				return redirect()->back();
			}
		}
		else return redirect()->back();
	}
	public function getAllMeter(){
		return $this->meter->allMeter();
	}

	public function getMeter(Request $request){
		$input =$request->all();
		//$input['meterid'] = 'meterLrB20150817223802M';
		return 	[
					'meter' =>   $this->meter->findMeter($input['meterid']) , 
					'reading' => $this->meter->findMeter($input['meterid'])->meterreading->last()
				];
	}
	public function listMeter(){
		return view('self.blade.meter.list')->withObj($this->meter->allMeter());
	}
	public function listTrashedMeter(){
		return view('self.blade.meter.trash')->withObj($this->meter->trashMeterAll())->withTitle('Trashed Meter List');
	}
	public function listMeterReading(){
		return view('self.blade.meterreading.list')->withObj($this->meter->allMeterReading());
	}
	public function editMeter($id){

	}

	public function deleteMeter($id){
		if($meter = $this->meter->findMeter($id)){
			$meter->delete();
			return redirect()->back()->with('flash_message' , 'Meter has been deleted');
		}
		return redirect()->back()->withErrors('Meter does not exist');
	}
	public function changeMeterStatus($id){

	}
}
