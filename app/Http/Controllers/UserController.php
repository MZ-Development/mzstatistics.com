<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Sign(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|min:2',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'login' => 'required|min:6|max:30',
            'password' => 'required|min:6|max:30'
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $login = $request->input('login');
        $password = $request->input('password');
        $password = Hash::make($password);
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'login' => $login,
            'password' => $password
        ]);
        if($validate) {
            return redirect()->route('auth');
        }
    }
    public function Auth(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('/');
        }
        $validate = $request->validate([
            'login' => 'required|min:6|max:30',
            'password' => 'required|min:6|max:30'
        ]);
        $user = $request->only('login', 'password');
        if(Auth::attempt($user)){
            $request->session()->regenerate();
            return redirect()->route('/');
        }
        var_dump($user);
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
