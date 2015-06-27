<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeownerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('homeowner' , function($t){
			$t->increments('id');
			$t->string('password', 60);
			$t->string('email')->unique();
			$t->string('firstname');
			$t->string('middlename');
			$t->string('lastname');
			$t->string('address');
			$t->string('landline');
			$t->string('mobile');
			$t->string('gender');
			$t->string('propertyaddress');
			$t->date('birthdate');
			$t->string('usergroup');
			$t->string('status');
			$t->rememberToken();
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
		Schema::drop('homeowner');
	}

}
