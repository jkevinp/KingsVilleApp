<?php namespace KingsVilleApp\Repositories\Contracts;
	
interface HomeOwnerContract{
		public function all();
		public function find($id);
		public function count();
		public function store($param);
		public function edit($id, $param);
		public function search($query);
}