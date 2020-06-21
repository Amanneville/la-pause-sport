<?php

namespace App\Http\Controllers;

use App\Model\Role;
use App\Model\Session;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Image;

class UserController extends Controller
{
    //public function roles()
    //    {
    //        return $this->belongsToMany('App\Role')->using('App\RoleUser');
    //    }

    public function profil()
    {
            $user = Auth::user();
            $UserSessions = User::find($user->id);
            return view('users.membre.profil.index')->with('usersessions', $UserSessions)->with('user', $user);
    }

    public function profilCoach()
    {
        $user = auth::user();

            $user = auth::user();
            $sessions = Session::all()->where('auteur_id', '=', $user->id);
        return view('users.coach.profil.index')->with('sessions', $sessions)->with('user', $user);
    }

    public function profilAdmin()
    {
            $user = Auth::user();
            $UserSessions = User::find($user->id);
            return view('admin.index')->with('user', $user)->with('UserSessions', $UserSessions);
    }

    public function update_avatar(Request $request){
        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('users.membre.profil.index', array('user' => Auth::user()) );
    }
}
