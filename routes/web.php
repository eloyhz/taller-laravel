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
    return view('index');
})->name('Inicio');


/* Route::get('/prueba', function(){
    return view('Hola Mundo');
});
 */

/*  Route::get('/prueba/{nombre}/{apellido?}', function($nombre, $apellido='Jaja'){
    return view('prueba.uno', ['nombre' => $nombre, 'apellido' => $apellido]);
});
 */

 Route::get('/prueba/{nombre}/{apellido?}', 'PruebaController@index');

 Route::get('/principal', 'PruebaController@index2');

// Route::get('/alumnos', 'AlumnoController@index');

// Route::get('/alta', 'AlumnoController@alta');

Route::resource('/alumnos', 'AlumnoController')->middleware(['auth', 'EsAlumno']);

Route::resource('/profesores', 'ProfesorController')->middleware(['auth', 'EsProfesor']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/error', function(){
    return view('error_permisos');
});