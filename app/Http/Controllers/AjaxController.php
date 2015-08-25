<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;

use Illuminate\Http\Request;
use KingsVilleApp\Repositories\Contracts\ContentsContract;
use KingsVilleApp\Repositories\Contracts\BillTypeContract;
use KingsVilleApp\Repositories\Contracts\FeeContract;

class AjaxController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(ContentsContract $cc , BillTypeContract $btc , FeeContract $fc){
		$this->content = $cc;
		$this->billtype = $btc;
		$this->fee = $fc;
	}
	public function store(Request $request){
		$input = $request->all();
		if($request->ajax() && $request->has('type')){
			$content = $this->content->find($input['id']);
			$content->content = $input['value'];
			$content->save();
		}
	}
	public function search(Request $request){
		$input = $request->all();
		if($request->ajax() && $request->has('value')){
			$c= $this->content->find($input['value']);
			$result['content'] = $c;
			return ($result);
		}
	}
	public $allowed = ['meter' , 'billtype' , 'fee' ,'user' ,'meterreading'];
	public function get(Request $request){
		$input =$request->all();
		$type = $input['type'];
		$result = [];
		foreach ($type as $t) {
			if(in_array($t, $this->allowed)){
				$result[$t] = $this->$t->findAllBy($input['param'][$t]['field'] ,$input['param'][$t]['value']);
			}
		}
		$result['type'] = $input['type'];
		$result['param'] = $input['param'];
		return $result;
	}
	
	
}
