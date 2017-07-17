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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::post('/logout', [ 'as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('/students', 'StudentController@index');
Route::post('/student/registrar', 'StudentController@create');

Route::get('/subjects', 'SubjectController@index');
Route::post('/subject/registrar', 'SubjectController@create');

Route::get('/home', 'HomeController@index')->name('home');
