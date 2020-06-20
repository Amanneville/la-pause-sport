<?php

namespace App\Http\Controllers;

use App\Model\Role;
use App\Model\RoleUser;
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

    public function profil()
    {
        $user = Auth::user();
        $role = Role::find(3);


        $role_user = RoleUser::all();
        $role_user = $role_user->where('role_user', '=', 3);

        return view('profile', array('user' => Auth::user()));

    }
    public function profilCoach()
    {
        $user = Auth::user();
        $role_user = Roleuser::all();
        $role_user = $role_user->where('role_user', '=', 2);

         return view('users.coach.profil.index', array('user' => Auth::user()));
    }
    public function profilAdmin()
    {
        $user = Auth::user();
        $role_user = Roleuser::all();

        $role_user = $role_user->where('role_user', '=', 1);

        return view('profilAdmin', array('user' => Auth::user()));

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
