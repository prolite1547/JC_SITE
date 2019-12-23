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

// Route::get('/', function () {
//     return view('screens.home');
// });

Route::get('/home', 'HomeController@index');
Route::get('/job/details/{id}', 'HomeController@showJobDetails');
Route::get('/import/json', 'JsonImportController@index');
Route::post('/upload/json','JsonImportController@importFile')->name('import.json');

 