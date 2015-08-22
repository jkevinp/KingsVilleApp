<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('billingdetail', function(Blueprint $table)
		{
			$table->string('id')->primary();
			$table->string('bill_id');
			$table->string('fee_id');
			$table->decimal('amount' , 10 , 2);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('billingdetail');
	}

}
