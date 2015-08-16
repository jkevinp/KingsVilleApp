<?php namespace KingsVilleApp\Repositories\Contracts;

interface ReservationContract{
	public function all();
	public function find($id);
	public function count();
	public function store($param);
	public function edit($id, $param);
	public function findBy($field, $param);
	public function search($query);
	public function changeStatus($id);
	public function getFillable();
	public function getForm();
}