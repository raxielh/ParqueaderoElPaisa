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
    return redirect('/login');
});

Auth::routes();

Route::get('/register', function () {
    return redirect('/login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/parqueo', 'HomeController@parqueo')->name('parqueo');

Route::post('/cobrar', 'HomeController@cobrar')->name('cobrar');

Route::get('/lugares/{tipo_vehiculo}', 'HomeController@puestos')->name('lugares');

Route::get('informe/', 'HomeController@informe')->name('informe.index');
Route::post('/r_informe', 'HomeController@r_informe')->name('r_informe');

Route::get('/buscar_placa/{puesto}', 'HomeController@buscar_placa')->name('buscar_placa');

Route::resource('tarifatipoveiculos', 'TarifatipoveiculoController');

Route::resource('tipovehiculos', 'TipovehiculoController');

Route::resource('estadopuestos', 'EstadopuestoController');

Route::resource('puestos', 'PuestoController');

Route::resource('puestos', 'PuestoController');

Route::resource('tarifas', 'TarifasController');

Route::resource('tarifas', 'TarifasController');

Route::resource('detalleTarifas', 'DetalleTarifaController');