<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meter' ,function($t){
			
			$t->string('id')->primary();
			$t->string('user_id');
			$t->string('readingunit')->default('cubic');
			$t->string('status')->default('active');
			$t->string('details')->nullable();
			$t->timestamps();
			$t->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('meter');
	}

}
