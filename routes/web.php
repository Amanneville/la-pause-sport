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





// register / Login
Auth::routes();



// Les page de session + affichage des sessions avec chacun add session meteo + calendar
Route::get('/sessionfitness', 'SessionSportController@fitnessindex')->name('sessionsfitness');
Route::get('/sessionfitness', 'SessionListController@index');


Route::get('/sessionmusculation', 'SessionSportController@musculationindex')->name('sessionsmusculation');
Route::get('/sessionmusculation', 'SessionListController@index');


Route::get('/sessionrunning', 'SessionSportController@runningindex')->name('sessionsrunning');
Route::get('/sessionrunning', 'SessionListController@index');


Route::get('/sessionyoga', 'SessionSportController@yogaindex')->name('sessionsyoga');
Route::get('/sessionyoga', 'SessionListController@index');

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



// Création d'une session
Route::get('/session', 'SessionController@index')->name('creationSession');
Route::post('/session', 'SessionController@create')->name('creationSession');



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



//Liste des sessions existantes
Route::get('/session-list', 'SessionListController@index');

// Mes sessions, je n'autorise que les users connectés
Route::get('/mes-sessions', 'User\SessionsController@index')->middleware('auth');
Route::post('/mes-sessions', 'User\SessionsController@index')->middleware('auth');

Route::get('/mes-sessions/{id}', 'User\SessionsController@show')->middleware('auth');

