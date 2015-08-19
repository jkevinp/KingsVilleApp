<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bill', function(Blueprint $table)
		{
			$table->string('id')->primary();
			$table->string('status')->default('pending');
			$table->string('meter_id');
			$table->date('datestart');
			$table->date('dateend');
			$table->date('duedate');
			$table->decimal('amount');
			$table->string('details');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bill');
	}

}
