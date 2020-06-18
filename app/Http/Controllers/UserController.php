<?php

namespace App\Http\Controllers;

use App\Model\RoleUser;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\DB;
use Image;

class UserController extends Controller
{
    //
    public function profile()
    {

        $user = Auth::user();

        $role_user = RoleUser::all();

        $role_user = $role_user->where('role_user', '=', 3);

            return view('profile', array('user' => Auth::user()));

    }
    public function profileCoach()
    {


        $user = Auth::user();

        $role_user = Roleuser::all();

        $role_user = $role_user->where('role_user', '=', 2);

            return view('profileCoach', array('user' => Auth::user()));
    }
    public function profileAdmin()
    {


        $user = Auth::user();

        $role_user = Roleuser::all();


        $role_user = $role_user->where('role_user', '=', 1);

            return view('profileAdmin', array('user' => Auth::user()));

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
