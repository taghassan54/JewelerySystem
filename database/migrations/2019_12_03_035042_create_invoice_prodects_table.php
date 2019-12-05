<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceProdectsTable extends Migration {

	public function up()
	{
		Schema::create('invoice_prodects', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('invoices_id')->unsigned();
			$table->integer('prodects_id')->unsigned();
			$table->string('Quantity', 191);
			$table->string('amount', 191);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('invoice_prodects');
	}
}