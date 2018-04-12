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
Route::get('cine','CineController@index');
Route::post('cine/ventaEntrada','CineController@vender');
Route::get('/', function () {
    return view('welcome');
});



Route::get('problema2', function () {
    return view('problema2');
});
Route::post('venta/gaseosas','GaseosaController@vender');



Route::get('problemaHotel',function (){
	return view('hotel');
});

Route::post('venta/hotel','HotelController@vender');


Route::get('homepage','HomeController@index');

Route::get('/productos','ProductoController@index');


//clase 6---------------------------------------------

Route::get('/personas','PersonaController@index');
Route::get('/personas/mostrar/{id}','PersonaController@mostrar');
Route::get('/personas/nuevo','PersonaController@nuevo');


Route::get('/auto/mostrar','AutosController@index');
Route::get('/auto/nuevo','AutosController@create');
Route::post('/auto/crear','AutosController@store');
Route::get('/auto/editar/{id}','AutosController@edit');
Route::post('/auto/editado','AutosController@editado');
Route::get('/auto/eliminar/{id}','AutosController@delete');




//semana 7


Route::get('/user','UserController@index');
Route::get('/post','PostController@index');


//semana 7 -> mantenimiento a la tabla user

Route::get('/user2','UserController@index2');
Route::get('/post2','PostController@index2');

Route::get('/mostrarUsuarios','UserController@showUsers');
Route::get('/user/eliminar/{id}','UserController@delete');
Route::get('/user/editar/{id}','UserController@edit');
Route::post('/user/editado','UserController@editado');
Route::get('/user/nuevo','UserController@create');
Route::post('/user/crear','UserController@store');


//semana 7 -> mantenimiento de la tabla post
Route::get('/postshow','PostController@show');
Route::get('/post/eliminar/{id}','PostController@delete');
Route::get('/post/editar/{id}','PostController@edit');
Route::post('/post/editado','PostController@editado');
Route::get('/post/nuevo','PostController@create');
Route::post('/post/crear','PostController@store');