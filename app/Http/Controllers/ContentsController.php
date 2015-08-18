<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\Http\Requests;
use KingsVilleApp\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use KingsVilleApp\Repositories\Contracts\ContentsContract;
class ContentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(ContentsContract $cc){
		$this->contents = $cc;
	}
	public function create(){
		return view('self.blade.empty.form')->with('form', $this->contents->getForm())
					->with('formTitle','Add new Announcement')
					->withRoute(route('User.content.store'));
	}
	public function store(Request $request){
		$input = $request->all();
		$input['userid'] = Auth::user()->id;
		if($this->contents->store($input))
			return redirect()->back()->with('flash_message' , 'Successfully added new Announcement!');
		else 
			return redirect()->back();
	}
	public function listContent(){
		return view('self.blade.content.list')->with('contents' , $this->contents->all());
	}

	public function show($id){
		//
	}

	
	public function edit($id){
		//
	}

	
	public function update($id)
	{
		//
	}

	public function destroy($id){
		//
	}

}
