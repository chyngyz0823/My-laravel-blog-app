<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {


        $validated = validator($request->all(), [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
            'remember' => ['accepted']
        ])->validate();



        $user = new User;
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);
        $user->remember_token = $validated['remember'];
//        $user->admin = false;
        $user->save();




//        $email = $request->input('email');
//        $password = $request->input('password');
//        $remember = $request->input('remember');
//        dd($email, $password,$remember);

        return redirect()->route('user.posts');
    }
}
