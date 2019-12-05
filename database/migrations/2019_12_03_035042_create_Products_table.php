<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('Products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 191);
			$table->string('img', 255);
			$table->text('description');
			$table->string('price', 191);
			$table->integer('categories_id')->unsigned();
			$table->string('matrial_weight', 191);
			$table->integer('caliber_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('Products');
	}
}