<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;

use Illuminate\Http\Request;
use KingsVilleApp\Repositories\Contracts\FeeContract;
class FeeController extends Controller {


	public function __construct(FeeContract $fee){
		$this->fee = $fee;
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
		$form = $this->fee->getForm();
		return view('self.blade.empty.form')
				->withForm($form)
				->with('formTitle','Create new Fee')
				->withRoute(route('User.fee.store'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input =  $request->all();
		if($this->fee->store($input)) return redirect()->route('User.fee.list')->with('flash_message','Fee has been saved.');
		else return redirect()->back();

	}
	public function changeStatus($id){
		if($this->fee->changeStatus($id))
			return redirect()->back()->with('flash_message' , 'Changed Status of Fee');
		else 
			return redirect()->back()->with('errors' , 'Unable to change fee status.');
	}
	public function restore($id){//Done
		$fee = $this->fee->findTrash($id);
		if($fee){
			$fee->restore();
			return redirect()->back()->with('flash_message' , 'Fee restored!');
		}
		return redirect()->back()->withErrors('Trash Fee not found!');
	}
	public function listFee(){
		$obj = $this->fee->all();
		return view('self.blade.fee.list')
				->withTitle('Fees Viewer')
				->withObj($obj);
	}
	public function listTrashedFee(){
		$obj = $this->fee->trashAll();

		return view('self.blade.fee.trash')
				->withTitle('Deleted Fees Viewer')
				->withObj($obj);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	public function destroy($id) //done
	{
		if($fee  = $this->fee->find($id))
		{
			$fee->delete();
			return redirect()->back()->with('flash_message' , 'Successfully Deleted Fee');
		}
		return redirect(route('User.fee.list'))->withErrors('Fee does not exist');
	}

}
