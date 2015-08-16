<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaction' , function($t){
			$t->string('id')->primary();
			$t->string('name');
			$t->string('account_id');
			$t->string('description');
			$t->decimal('amount', 10, 2);
			$t->date('date_charged');
			$t->date('due_date');
			$t->string('status');
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
		Schema::delete('transaction');
	}

}
