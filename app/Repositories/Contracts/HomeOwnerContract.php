<?php namespace KingsVilleApp\Repositories\Contracts;
	
interface HomeOwnerContract{
		public function all();
		public function find($id);
		public function count();
}