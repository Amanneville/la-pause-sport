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


// PAGE ACCUEIl
Route::get('/', 'HomeController@index')->name('home');
// Présentation des sessions sur page d'accueil     -> nécessaire dans hommeController ?? (sessionslist existe déjà)
// Toutes les sessions, tous niveaux, tous sports + users non connectés
Route::get('/home', 'HomeController@index')->name('home');

//--------------------------------------------------------------------------

// AUTH
Auth::routes();
// Debugg déconnexion
Route::get('logout', 'Auth\LoginController@logout', function () {
    return view('home');
});

//--------------------------------------------------------------------------

// ADMIN
//Is Admin
Route::get('admin_area', ['middleware' => 'admin', function () {
 // A UTILISER
}]);
// Liste & gestion toutes les sessions existantes => view admin.sessions-list
Route::get('/admin-sessions', 'SessionsListController@index');
// Liste & gestion de tous les users  Route::get('/index'), A CREER

//--------------------------------------------------------------------------

// USERS
// Avatar
Route::middleware ('auth', 'verified')->group (function (){
    Route::resource ('image',
        'ImageController', [
            'only'=>['create', 'store', 'destroy', 'update']
        ]);
});


// users MEMBRE

// Route::get('profil', 'UserController@profil'); = menu pour profil membre ?

// Modifier avatar => view users.avatar = incorporée dans view users.membre.profil.index
Route::post('profil', 'UserController@update_avatar');

// Profil membre => view users.membre.profil.index     VALIDATOR A CREER
Route::get('/profil', 'SessionsController@index')->middleware('auth');

// Infos de la session du user inscrit => view users.session.show
Route::get('/mes-sessions/{id}', 'SessionsController@show')->middleware('auth');

// Formulaire de modification des infos personnelles membre
// view A CREER

//inscription dans une session
Route::resource('inscription', 'User\SessionsController@create')->middleware('auth');

// MESSAGE (tchat par session) en tant que membre
// Ajouter un message au tchat
Route::post('/mes-sessions/{id}', 'SessionsController@store');
// Récupérer tous les messages du tchat
Route::post('/getMessages/{id}', 'SessionsController@chat');

//--------------------------------------------------------------------------

// users COACH
// Profil coach => view users.membre.coach.index     CONTROLLER
Route::get('profilCoach', 'UserController@profilCoach');
// Modifier avatar => view users.avatar = incorporée dans view users.coach.profil.index
// Création d'une sessions sport => users.coach.create-session.index
Route::get('/session', 'SessionController@index')->name('creationSession');
Route::get('/session', 'CreateSessionController@index');
Route::post('/session', 'CreateSessionController@store');

//--------------------------------------------------------------------------

// SPORTS
// Affiche les informations de la session avant inscription
Route::get('/infos-session/{id}', 'SessionSportController@index')->middleware('auth');;

// MUSCULATION
// Affiche toutes les sessions du niveau de l'user connecté => sports.musculation.index
Route::get('/musculation', 'SessionSportController@musculationindex')->middleware('auth');;
// YOGA
Route::get('/yoga', 'SessionSportController@yogaindex');
// RUNNING
Route::get('/running', 'SessionSportController@runningindex');
// FITNESS
Route::get('/fitness', 'SessionSportController@fitnessindex');
// Ajoute une session
//Route::post('/musculation', 'SessionListController@index');
//--------------------------------------------------------------------------


// ????

Route::post('/fitness', 'SessionListController@index');

Route::post('/running', 'SessionListController@index');

Route::post('/yoga', 'SessionListController@index');









// USER TCHAT


Route::get('profileAdmin', 'UserController@profileAdmin');
Route::post('profileAdmin', 'UserController@update_avatar');


// Création d'une session
Route::get('/session', 'SessionController@index')->name('creationSession');

Route::get('/session', 'CreateSessionController@index');
Route::post('/session', 'CreateSessionController@store');

//Liste des sessions existantes
//Route::get('/session-list', 'SessionListController@index');
// Mes sessions, je n'autorise que les users connectés
// get : affiche la page profil user avec SES sessions


//--------------------------------------------------------------------------

//inscription dans une session
Route::resource('inscription', 'User\SessionsController')->middleware('auth');

// Accés ADMIN
//Route::get('/role', 'RoleController@index');





