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
// Route::get('/test', function () {
//     return 'Hola Platzi';
// });
// Route::get('/test', function () {
//     return ['saludo'=> 'Hola',
//             'nombre' => 'Josue'];
// });
Route::get('/test', function () {
    return view('test',[
        'title' => 'Curso Laravel en PLatzi 2019'
    ]);
});

// Route::post()
// Route::put()
// Route::delete()
// Route::any()