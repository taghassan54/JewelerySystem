<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	public function up()
	{
		Schema::create('invoices', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('type');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('clients_id')->unsigned();
			$table->integer('supplier_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('invoices');
	}
}