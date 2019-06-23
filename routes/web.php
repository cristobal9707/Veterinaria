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
//ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

//Ruta autentificacion
Auth::routes();

//Ruta Home
Route::get('/home', 'HomeController@index')->name('home');

//Rutas CRUD clientes
Route::resource('/clientes', 'ClienteController');

//Rutas CRUD mascotas
Route::resource('/mascotas', 'MascotaController');

//Rutas CRUD farmacos
Route::resource('/farmacos', 'FarmacoController');

//Rutas CRUD recetas
Route::resource('/recetas', 'RecetaController');
