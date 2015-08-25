<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;

use Illuminate\Http\Request;
use KingsVilleApp\Repositories\Contracts\ExpenditureTypeContract as etc;
use Response;
use Auth;
class ExpenditureTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(etc $etc){
		$this->expendituretype = $etc;
	}

	public function listBillType()
	{
		$obj = $this->expendituretype->all();
		return view('self.blade.expendituretype.list')->withObj($obj)->withTitle('Expenditure type list');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		return view('self.blade.empty.form')
		->withForm($this->expendituretype->getForm())
		->with('formTitle','Create new Expenditure type')
		->withRoute(route('User.expenditure.type.store'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->all();
		$input['user_id'] = Auth::user()->id;
		if($billtype = $this->expendituretype->store($input)){
			return redirect()->back()->with('flash_message' , 'Expenditure Type has been added.');
		}
		return redirect()->back();
	}
	public function search(Request $request){
		$input = $request->all();
		if($request->ajax() && $request->has('id')){
			return $this->expendituretype->findBy('id' , $request['id']);
		}else 
			return Response::json(['error' => 'Input missing or not ajax' ]);
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
	public function destroy($id)
	{
		//
	}

}
