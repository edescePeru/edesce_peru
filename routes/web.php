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

Route::get('/inscriptions/create', 'InscriptionController@index');
Route::post('/inscription/registrar', 'InscriptionController@create');

Route::get('/inscriptions/show', 'InscriptionController@show');
Route::post('/inscription/score', 'InscriptionController@score');
Route::post('/inscription/pdf', 'InscriptionController@pdf');
Route::post('/inscription/pdfD', 'InscriptionController@pdfD');
Route::post('/inscription/eliminar', 'InscriptionController@delete');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile/data/{code}', 'InscriptionController@showProfile');

Route::post('/contact', 'MailController@send');

Route::get('/paypal/process/{orderId}', 'PayPalCardController@process')->name('paypal.process');
