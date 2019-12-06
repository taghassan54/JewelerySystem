<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route("home");
    } else {
        return redirect()->route("login");
    }
    /*    return view('welcome'); */
});


Route::resource('category', 'CategoryController');
Route::resource('material', 'MaterialController');
Route::resource('jewelry', 'ProductModelController');
Route::resource('caliber', 'GoldCaliberController');
Route::resource('invoices', 'InvoicesController');
Route::resource('invoiceprodects', 'InvoiceProdectsController');
Route::resource('clients', 'ClientModelController');
Route::resource('supplier', 'SupplierModelController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
