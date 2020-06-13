<?php

use Illuminate\Support\Facades\Auth;
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

// Création d'une session
Route::get('/session', 'SessionController@index');
//Liste des sessions existantes
Route::get('/session-list', 'SessionListController@index');


// Accés ADMIN
Route::get('/role', 'RoleController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Tchat : get affiche le form & post récup les infos
Route::get('/message', 'MessageController@index');
Route::post('/message', 'MessageController@store');






