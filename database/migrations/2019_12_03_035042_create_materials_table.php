<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialsTable extends Migration {

	public function up()
	{
		Schema::create('materials', function(Blueprint $table) {
			$table->increments('id');
			$table->softDeletes();
			$table->timestamps();
			$table->string('name', 191);
		});
	}

	public function down()
	{
		Schema::drop('materials');
	}
}