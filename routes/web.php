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


/* Route::get('/prueba', function(){
    return view('Hola Mundo');
});
 */

/*  Route::get('/prueba/{nombre}/{apellido?}', function($nombre, $apellido='Jaja'){
    return view('prueba.uno', ['nombre' => $nombre, 'apellido' => $apellido]);
});
 */

 Route::get('/prueba/{nombre}/{apellido?}', 'PruebaController@index');