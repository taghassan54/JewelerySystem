<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplierTable extends Migration {

	public function up()
	{
		Schema::create('supplier', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('phone');
		});
	}

	public function down()
	{
		Schema::drop('supplier');
	}
}