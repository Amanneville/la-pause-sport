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
    return view('home');
});

Auth::routes();

//Partie enregistrement et connexion Coach

Route::get('auth/loginCoach', 'Auth\AuthControllerCoach@getLoginCoach');
Route::post('auth/loginCoach', 'Auth\AuthControllerCoach@postLoginCoach');
Route::get('auth/logoutCoach', 'Auth\AuthControllerCoach@getLogoutCoach');
Route::get('auth/registerCoach', 'Auth\AuthControllerCoach@getRegisterCoach');
Route::post('auth/registerCoach', 'Auth\AuthControllerCoach@postRegisterCoach');



// Debugage deconnexion
Route::get('logout', 'Auth\LoginController@logout', function () {
    return view('login');
});


Route::get('/home', 'HomeController@index')->name('home');


// Création d'une session
Route::get('/session', 'SessionController@index')->name('creationSession');
//Liste des sessions existantes
Route::get('/session-list', 'SessionListController@index');


// Accés ADMIN
Route::get('/role', 'RoleController@index');

// Accés Coach
Route::get('/registerCoach', 'Auth\RegisterController@registerCoach')->name('registerCoach');;


// Image Profil route controleur
Route::middleware ('auth', 'verified')->group (function (){
    Route::resource ('image',
    'ImageController', [
        'only'=>['create', 'store', 'destroy', 'update']
        ]);
});

// Route vers la gestion de profil

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
