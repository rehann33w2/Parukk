<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register() {

        return view('/register');
    }

    public function registerPost(Request $request) {
        $user = new User();

        $user->name =$request->name;
        $user->email =$request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        if ($user)
        return redirect('/login');

        return back()->with('success', 'Register successfuly');
    }

}

