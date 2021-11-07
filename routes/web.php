<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/proveedores', 'ProveedoresController@index')->name('proveedores.index');
Route::get('/categorias', 'CategoriasController@index')->name('categorias.index');
Route::get('/clientes', 'ClientesController@index')->name('clientes.index');
Route::get('/productos', 'ProductosController@index')->name('productos.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
