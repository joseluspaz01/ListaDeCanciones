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

Route::get('/pantalla1', function () {
    return view('pantalla1',[
        'Artista 1'=>'Katy perry',
        'Artista 2'=>'Enrique',
        'artista 3'=>'Ariana',


    ]);
});