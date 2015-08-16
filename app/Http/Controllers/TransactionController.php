<?php namespace KingsVilleApp\Http\Controllers;

use KingsVilleApp\User;
use Auth;
use KingsVilleApp\Repositories\Contracts\TransactionContract;
use KingsVilleApp\Repositories\Contracts\UserContract;
use DB;
class TransactionController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(TransactionContract $tc , UserContract $uc){
		$this->middleware('authenticate');
		$this->transactionContract = $tc;
		$this->user = $uc;
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function show(){
		$transactions = Auth::user()->transactions;
		return view('self.blade.transaction.transaction-list')
				->withTitle('Payments')
				->withTransactions($transactions);
	}
	public function ledger(){
		$transactions = Auth::user()->transactions;
		return view('self.blade.transaction.ledger')
				->withTitle('Ledger Viewer')
				->withTransactions($transactions);
	}
	public function login(){
		return view('auth.login');
	}
	public function waterBilling(){
		$users = $this->user->findAllBy('usergroup' , 'homeowner')->get();
		
		return view('self.blade.transaction.waterbilling')->with('users', $users);
	}
}
