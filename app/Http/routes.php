<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/kategori_barang','KategoriBarangController');
Route::resource('/barang','BarangController');
Route::resource('/company','CompanyController');
Route::resource('/supplier','SupplierController');