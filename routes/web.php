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

Route::get('/form-persona/{nombre?}/{edad?}', function ($nombre = "Amilcar",$edad = "12") {
    // return view('persona', array(
    //     "nombre" => $nombre,
    //     "edad" => $edad
    // ));
    return view('persona')
        ->with('nombre', $nombre)
        ->with('edad', $edad);
})
->where([
    'edad' => '[0-9]+',
    'nombre' => '[a-zA-Z ]+'
]);
