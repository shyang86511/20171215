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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return 'D1044181010王韋翔';
});

Route::get('/abc', function () {
    return view('abc');
})->name('teachers.abc');



Route::get('teachers/{id}','TeachersController@show')->where(['id'=>'[0-9]+'])->name('teachers.show');

Route::get('teachers/create','TeachersController@cre')->name('teachers.create');

Route::get('teachers','TeachersController@index');

Route::post('teachers/store','TeachersController@store');