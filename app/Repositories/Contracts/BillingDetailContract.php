<?php namespace KingsVilleApp\Repositories\Contracts;

interface BillingDetailContract{
	public function all();
	public function insert($bill , $fees , $meterreading);
	public function find($id);
	public function count();
	public function store($param);
	public function edit($id, $param);
	public function findBy($field, $param);
	public function search($query);
	public function changeStatus($id);
	public function getFillable();
	public function getForm();
	public function trashAll();
	public function findTrash($id);
	public function findAllBy($field, $param);
}