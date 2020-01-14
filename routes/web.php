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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index','ProductController@products');

Route::get('/addProduct', function () {
    return view('admin.addproduct');
})->middleware('rol');

Route::post('/addProduct', 'ProductController@add');

Route::get('/detalleProducto/{id}', 'ProductController@detalle');

Route::get('/editarProducto/{id}', 'ProductController@editar');
Route::put('/editarProducto', 'ProductController@actualizar');

Route::get('/borrarProducto/{id}', 'ProductController@borrar');

Route::get('/buscador', 'ProductController@buscar');

Route::get('/preguntas', function () {
  return view('preguntas');
});

Route::get('/cart/{id}','ProductController@cart');

Route::get('/carrito','ProductController@carrito');
