<?php namespace KingsVilleApp\Repositories\Contracts;
	
interface MeterContract{
		public function allMeter();
		public function allMeterReading();
		public function findMeter($id);
		public function storeMeterReading($param);
		public function storeMeter($param);
		public function edit($id, $param);
		public function findBy($field, $param ,$operator);
		public function search($query);
		public function changeStatus($id);
		public function findAllBy($field, $param,$operator);
		public function getMeterForm();
		public function getMeterReadingForm();
		public function getNoMeter();
		public function trashMeterAll();
		public function findMeterTrash($id);
}