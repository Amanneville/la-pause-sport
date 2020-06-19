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





// register / Login
Auth::routes();



// Les page de sessions + affichage des sessions avec chacun add session meteo + calendar
Route::get('/fitness', 'SessionSportController@fitnessindex');
Route::post('/fitness', 'SessionListController@index');

Route::get('/musculation', 'SessionSportController@musculationindex');
Route::post('/musculation', 'SessionListController@index');

Route::get('/running', 'SessionSportController@runningindex');
Route::post('/running', 'SessionListController@index');

Route::get('/yoga', 'SessionSportController@yogaindex');
Route::post('/yoga', 'SessionListController@index');


// affichage page accueil avec toutes les sessions

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');



// Debugage deconnexion
Route::get('logout', 'Auth\LoginController@logout', function () {
    return view('home');
});


//Is Admin
Route::get('admin_area', ['middleware' => 'admin', function () {
    //
}]);
//Liste de TOUTES LES sessions existantes
Route::get('/session-list', 'SessionListController@index');
// Accés ADMIN
//Route::get('/role', 'RoleController@index');
Route::get('/home', 'HomeController@index')->name('home');
//--------------------------------------------------------------------------

// COACH
// Accés Coach
//Route::get('/registerCoach', 'Auth\RegisterController@registerCoach')->name('registerCoach');;


// ELEVES = USER
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

// USER TCHAT
Route::get('profileCoach', 'UserController@profileCoach');
Route::post('profileCoach', 'UserController@update_avatar');

Route::get('profileAdmin', 'UserController@profileAdmin');
Route::post('profileAdmin', 'UserController@update_avatar');


// Création d'une session
Route::get('/session', 'SessionController@index')->name('creationSession');

Route::get('/session', 'CreateSessionController@index');
Route::post('/session', 'CreateSessionController@store');

//Liste des sessions existantes
Route::get('/session-list', 'SessionListController@index');
// Mes sessions, je n'autorise que les users connectés
// get : affiche la page profil user avec SES sessions
Route::get('/mes-sessions', 'User\SessionsController@index')->middleware('auth');
// PAGE infos d'UNE session à laquelle user est inscrit
Route::get('/mes-sessions/{id}', 'User\SessionsController@show')->middleware('auth');
//post ajouter un message au chat
Route::post('/mes-sessions/{id}', 'User\SessionsController@store');
// Récupérer tous les messages
Route::post('/getMessages/{id}', 'User\SessionsController@chat');
//--------------------------------------------------------------------------

//inscription dans une session
Route::resource('inscription', 'User\SessionsController')->middleware('auth');

// Accés ADMIN
//Route::get('/role', 'RoleController@index');

Route::get('/home', 'HomeController@index')->name('home');



