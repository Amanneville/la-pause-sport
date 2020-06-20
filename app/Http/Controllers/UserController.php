<?php

namespace App\Http\Controllers;

use App\Model\Role;
use App\Model\RoleUser;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class UserController extends Controller
{


    //public function roles()
    //    {
    //        return $this->belongsToMany('App\Role')->using('App\RoleUser');
    //    }

    public function profile()
    {
            $user = Auth::user();
            $UserSessions = User::find($user->id);
            return view('users.membre.profil.index')->with('usersessions', $UserSessions)->with('user', $user);
    }

    public function profileCoach()
    {

            $user = auth::user();


            return view('users.coach.profil.profileCoach')->with('user', $user);
    }
    public function profileAdmin()
    {

            $user = Auth::user();
            $UserSessions = User::find($user->id);

            return view('profileAdmin')->with('user', $user)->with('UserSessions', $UserSessions);

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

        return view('profile', array('user' => Auth::user()) );

    }
}
