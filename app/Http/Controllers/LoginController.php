<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function postregister(Request $request) {
        User::Create([
            'name' => $request->name,
            'level' => "Multiusers",
            'email' => $request->email,
            'password' => bcrypt($request->password),
            "remember_token" => Str::random(60),
        ]);

        return redirect("/login");
    }
}