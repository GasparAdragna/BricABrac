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

Route::get('/','EcommerceController@index');
Route::get('/mueble/{id}','EcommerceController@mueble');
Route::get('categoria/{id}', 'EcommerceController@categorias');
Route::get('vendidos/{id}', 'EcommerceController@vendidos');
Route::get('agregar/{id}', 'EcommerceController@agregar');
Route::get('carrito', 'EcommerceController@carrito');
Route::get('checkout', 'EcommerceController@checkout');
Route::post('checkout', 'EcommerceController@checkoutDatos');
Route::get('/carrito/eliminar/{id}', 'EcommerceController@eliminarCarrito');
Route::post('/procesar-pago', 'EcommerceController@pago');
Route::get('/prueba', function(){
  return view('prueba');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
