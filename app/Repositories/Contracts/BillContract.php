<?php namespace KingsVilleApp\Repositories\Contracts;

interface BillContract{
	public function all();
	public function find($id);
	public function count();
	public function store($param , $type);
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