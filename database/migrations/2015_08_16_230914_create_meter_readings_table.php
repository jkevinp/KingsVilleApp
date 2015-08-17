<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeterReadingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meterreadings' , function($t){
			$t->string('id')->primary();
			$t->string('meter_id');
			$t->decimal('lastreading' , 10, 2);
			$t->decimal('currentreading' , 10, 2);
			$t->date('readingdate');
			$t->string('details')->nullable();
			$t->softDeletes();
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
