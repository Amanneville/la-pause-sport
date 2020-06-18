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



// Les page de session + affichage des sessions avec chacun add session meteo + calendar
Route::get('/fitness', 'SessionSportController@fitnessindex');
Route::post('/fitness', 'SessionListController@index');


Route::get('/musculation', 'SessionSportController@musculationindex');
Route::post('/musculation', 'SessionListController@index');


Route::get('/running', 'SessionSportController@runningindex');
Route::post('/running', 'SessionListController@index');


Route::get('/yoga', 'SessionSportController@yogaindex');
Route::post('/yoga', 'SessionListController@index');

// affichage page accueil avec toute les session

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', ['middleware' => 'auth', function () {
    return view('home');
}]);



// Debugage deconnexion
Route::get('logout', 'Auth\LoginController@logout', function () {
    return view('login');
});


//Is Admin
Route::get('admin_area', ['middleware' => 'admin', function () {
    //
}]);




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


// Création d'une session
Route::get('/session', 'SessionController@index')->name('creationSession');
<<<<<<< HEAD
Route::get('/session', 'SessionController@index')->name('creationSession');
Route::post('/session', 'SessionController@create')->name('creationSession');
=======

Route::get('/session', 'CreateSessionController@index');
Route::post('/session', 'CreateSessionController@store');
>>>>>>> c1e07ef163405df5d85486b0e4474acde9f3e51f

//Liste des sessions existantes
Route::get('/session-list', 'SessionListController@index');
// Mes sessions, je n'autorise que les users connectés
Route::get('/mes-sessions', 'User\SessionsController@index')->middleware('auth');
Route::get('/mes-sessions/{id}', 'User\SessionsController@show')->middleware('auth');

//post récup les infos du tchat
Route::post('/mes-sessions/{id}', 'User\SessionsController@store');


// Accés ADMIN
Route::get('/role', 'RoleController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


