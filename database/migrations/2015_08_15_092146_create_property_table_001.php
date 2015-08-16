<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable001 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property' , function($t){
			$t->string('id')->primary();
			$t->string('account_id');
			$t->string('name');
			$t->decimal('size' ,10,2);
			$t->string('unit');
			$t->string('type');
			$t->string('address');
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
		Schema::drop('property');
	}

}
