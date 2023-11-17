<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function signin()
    {
        return view("signin");
    }

    public function signup()
    {
        return view("signup");
    }
    public function signout()
    {

    }
public function signin_valid()
    {

    }

    public function signup_valid(Request $request)
    {
        $request->validate([
            "email"=> "required|email|unique:users",
            "name"=> "required",
            "password"=> "required",
            "confrim_pass"=> "required|same:pass",
        ]);
        $user = $request->all();

        User::create([
            "email"=>$user["email"],
            "name"=>$user["name"],
            "password"=>Hash::make($user["pass"]),

        ]);
        dd($user);
    }


    public function account()
    {
        $users = User::all();
        return view("account", [
            "all_user"=>$users
        ]);
    }


}
