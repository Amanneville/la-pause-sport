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
Route::get('/midtest', 'SessionController@AfficheSessionLvl' )->middleware(['auth', 'isCoach']);

Route::get('/sessions', 'SessionController@AfficheSessionLvl');

Route::get('/user', 'SessionController@AfficheSessionLvl');

Route::get('/creer', 'SessionController@index');
Route::post('/creer', 'SessionController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Tchat : get affiche le form & post récup les infos
Route::get('/message', 'MessageController@index');
Route::get('/message-live', 'MessageController@getChat');

Route::post('/message', 'MessageController@store');



