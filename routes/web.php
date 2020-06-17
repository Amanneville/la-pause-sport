<?php

use App\Model\Message;
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

//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('home');
});

Auth::routes();



// Debugage deconnexion
Route::get('logout', 'Auth\LoginController@logout', function () {
    return view('login');
});


Route::get('/home', 'HomeController@index')->name('home');


// Création d'une session
Route::get('/session', 'SessionController@index')->name('creationSession');
//Liste des sessions existantes
Route::get('/session-list', 'SessionListController@index');
// Mes sessions, je n'autorise que les users connectés
Route::get('/mes-sessions', 'User\SessionsController@index')->middleware('auth');
Route::get('/mes-sessions/{id}', 'User\SessionsController@show')->middleware('auth');

// Page de la session de l'user
Route::get('/show', 'MessageController@index');
//post récup les infos du tchat
Route::post('/mes-sessions/{id}', 'MessageController@store');


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


