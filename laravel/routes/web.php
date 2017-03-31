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
Route::auth();

/* Route index home*/
Route::get('/','homeController@index');
/* Route index about*/
Route::get('about','aboutController@index');
/* Route form order*/
Route::get('order/add','orderController@index');
Route::post('order/add','orderController@store');
/* Route Data pesanan*/
Route::get('pemesanan','pesananController@index');
Route::get('pemesanan/add','pesananController@create');
Route::post('pemesanan/add','pesananController@store');

Route::get('pemesanan/{id}/edit','pesananController@edit');
Route::patch('pemesanan/{id}/edit','pesananController@update');
/* Route Data Login*/

Route::group(['middleware'=>'auth'], function(){
	/* Route Data Pelanggan*/
	Route::get('pelanggan','pelangganController@index');
	Route::get('pelanggan/add','pelangganController@create');
	Route::post('pelanggan/add','pelangganController@store');

	Route::get('pelanggan/{id}/edit','pelangganController@edit');
	Route::patch('pelanggan/{id}/edit','pelangganController@update');

	Route::delete('pelanggan/{id}/delete', 'pelangganController@destroy');
	/* Route Data Kategori Produk*/
	Route::get('kategori','kategoriController@index');
	Route::get('kategori/add','kategoriController@create');
	Route::post('kategori/add','kategoriController@store');

	Route::get('kategori/{id}/edit','kategoriController@edit');
	Route::patch('kategori/{id}/edit','kategoriController@update');

	Route::delete('kategori/{id}/delete', 'kategoriController@destroy');
	/* Route Data Produk*/
	Route::get('produk','produkController@index');
	Route::get('produk/add','produkController@create');
	Route::post('produk/add','produkController@store');

	Route::get('produk/{id}/edit','produkController@edit');
	Route::patch('produk/{id}/edit','produkController@update');

	Route::delete('produk/{id}/delete', 'produkController@destroy');
});


