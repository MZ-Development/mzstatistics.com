<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function sign(Request $request)
    {
        $validate= $request->validate([
           'login' => 'unique(posts)|min:6|max:30',
            'password' => 'min:6|max:30',
            'name' => 'min:3|max:50',
            'email' => 'unique(posts)|min:4|max:30',
            'phone' => 'min:12|unique(posts)'
        ]);

        $login = $request->input('login');
        $password = $request->input('password');
        $email = $request->input('email');
        $name = $request->input('name');
        $phone = $request->input('phone');

        $password = Hash::make($password);
        $user = User::create(['name' => $name, 'password' => $password,
            'login' => $login, 'email' => $email, 'phone' => $phone]);
        if($user){
            return redirect() -> route('auth');
        }
    }
    public function login(Request $request)
    {
        $validate= $request->validate([
            'login' => 'min:6|max:30',
            'password' => 'min:6|max:30',
        ]);


    }
}
