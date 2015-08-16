<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable001 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fee' , function($t){
			$t->string('id')->primary();
			$t->string('name');
			$t->string('type')->default('fixed');//percentage/fixed
			$t->string('transactiontype');
			$t->string('status')->default('active');
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
		Schema::drop('fee');
	}

}
