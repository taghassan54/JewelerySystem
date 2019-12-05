<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaliberTable extends Migration {

	public function up()
	{
		Schema::create('caliber', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 191);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('caliber');
	}
}