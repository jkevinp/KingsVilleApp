<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;

use Illuminate\Http\Request;
use KingsVilleApp\Repositories\Contracts\BillContract as bc;
use KingsVilleApp\Repositories\Contracts\FeeContract as fc;

class BillController extends Controller {

	public function __construct(bc $bc , fc $fc){
		$this->bill = $bc;
		$this->fee = $fc;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request){
		if($bill = $this->bill->store($request->all())){
			return redirect(route('User.bill.show' , $bill->id));
		} return redirect()->back()->withErrors('Could not save bill');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if($bill = $this->bill->find($id)){
			$billType = $bill->billType;
			$fees = $this->fee->findAllBy('billtype_id' , $billType->first()->id);
			return view('self.blade.bill.show')->withBill($bill)->with('fees' , $fees);
		}
		return redirect(route('User.index'))->withErrors('Could not find bill');
	}
	public function listBill(){
		return view('self.blade.bill.list')->withObj($this->bill->all())->withTitle('Bills');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
