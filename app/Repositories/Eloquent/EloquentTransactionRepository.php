<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\TransactionContract;
use KingsVilleApp\Transaction;
class EloquentTransactionRepository implements TransactionContract{
	public function find($id){
		return Transaction::find($id);
	}
	public function all(){
		return Transaction::all();
	}
	public function count(){
		return Transaction::all()->count();
	}
	public function store($param){

	}
	public function edit($id, $param){

	}
	public function search($query){
		
	}
}