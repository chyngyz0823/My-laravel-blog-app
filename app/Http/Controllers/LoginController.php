<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    //
    public function index() {

//        $foo = session()->get('foo');
//        dd($foo);

        return view('login.index');
    }

    public function store(Request $request) {

//        $session = session();
//        $session->put('foo', 'bar');



//        $ip = $request->ip();
//        dd($ip);

//        $validated = validator($request->all(), [
//            'name' => ['required', 'string', 'max:50'],
//            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
//            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
//            'remember' => ['accepted']
//        ])->validate();
//
//        $email = $request->input('email');
//        $password = $request->input('password');
//        $remember = $request->input('remember');
//
//        $credentials = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);
//
//        if (Auth::attempt($credentials)) {
//            $request->session()->regenerate();
//
//            return redirect()->intended('dashboard');
//        }
//
//        return back()->withErrors([
//            'email' => 'The provided credentials do not match our records.',
//        ]);



        ;
        return redirect()->route('user.posts');
    }
}
