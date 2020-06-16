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

// Tchat : get affiche le form & post récup les infos
Route::get('/message', 'MessageController@index');

Route::post('/message', 'MessageController@store');
