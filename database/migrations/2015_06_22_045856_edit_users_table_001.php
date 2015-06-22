<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUsersTable001 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users' , function($t){
			$t->renameColumn('name', 'firstname');
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
	/*	-Last Name
		-First Name
		-Middle Name
		-Address (Address ng bahay na tinitirhan niya ngayon)
		-Landline
		-Mobile
		-Birthday
		-Gender
		-Email
		-Property Address
		*/
}
