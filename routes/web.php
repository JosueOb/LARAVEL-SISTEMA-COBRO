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

Route::get('/', 'HomeController@index');

// Route::get('/test', function () {
//     return 'Hola Platzi';
// });
// Route::get('/test', function () {
//     return ['saludo'=> 'Hola',
//             'nombre' => 'Josue'];
// });
Route::get('/dashboard','DashboardController@index');

Route::resource('/expense_reports','ExpenseReportController');

Route::get('/expense_reports/{id}/confirmDelete', 'ExpenseReportController@confirmDelete');

Route::get('/expense_reports/{expense_report}/expense/create', 'ExpenseController@create');
Route::post('/expense_reports/{expense_report}/expense', 'ExpenseController@store');

Route::get('/expense_reports/{id}/confirmSendMail', 'ExpenseReportController@confirmSendMail');
Route::post('/expense_reports/{id}/sendMail', 'ExpenseReportController@sendMail');

// Route::post()
// Route::put()
// Route::delete()
// Route::any()
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
