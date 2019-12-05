<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('categories', function(Blueprint $table) {
			$table->foreign('materials_id')->references('id')->on('materials')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Products', function(Blueprint $table) {
			$table->foreign('categories_id')->references('id')->on('categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Products', function(Blueprint $table) {
			$table->foreign('caliber_id')->references('id')->on('caliber')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->foreign('clients_id')->references('id')->on('clients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->foreign('supplier_id')->references('id')->on('supplier')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('invoice_prodects', function(Blueprint $table) {
			$table->foreign('invoices_id')->references('id')->on('invoices')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('invoice_prodects', function(Blueprint $table) {
			$table->foreign('prodects_id')->references('id')->on('Products')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('categories', function(Blueprint $table) {
			$table->dropForeign('categories_materials_id_foreign');
		});
		Schema::table('Products', function(Blueprint $table) {
			$table->dropForeign('Products_categories_id_foreign');
		});
		Schema::table('Products', function(Blueprint $table) {
			$table->dropForeign('Products_caliber_id_foreign');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->dropForeign('invoices_clients_id_foreign');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->dropForeign('invoices_supplier_id_foreign');
		});
		Schema::table('invoice_prodects', function(Blueprint $table) {
			$table->dropForeign('invoice_prodects_invoices_id_foreign');
		});
		Schema::table('invoice_prodects', function(Blueprint $table) {
			$table->dropForeign('invoice_prodects_prodects_id_foreign');
		});
	}
}