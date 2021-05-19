<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ClientDatabase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    const ERROR = [
        0 => 'Ошибка подключения',
    ];

    public function Sign(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:30'
        ]);
        $user = new User();
        $user->saveUser(
            $request->input('email'),
            $request->input('password')
        );
        if($user) {
            return redirect()->route('auth');
        }
    }
    public function Auth(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('/');
        }
        $validate = $request->validate([
            'email' => 'required|min:6|max:30|email',
            'password' => 'required|min:6|max:30'
        ]);
        $user = $request->only('email', 'password');
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

    public function setToken(Request $request)
    {
//        $validate = $request->validate([
//            'db_host' => 'required|min:6',
//            'db_port' => 'required|min:4|max:4',
//            'db_name' => 'required|min:4',
//            'db_username' => 'required|min:4',
//            'db_password' => 'required|min:4'
//        ]);
        $db = new ClientDatabase(
            $request->input('db_host'),
            $request->input('db_port'),
            $request->input('db_name'),
            $request->input('db_username'),
            $request->input('db_password')
            );
        try {
            $db->getConnection();
        } catch (Exception $e){
            return ['success' => 0,'message' => 'Ошибка подключения к БД'];
        }
        $user = new User();
        $user->saveClientDatabase(
            $request->input('site'),
            $request->input('db_host'),
            $request->input('db_port'),
            $request->input('db_name'),
            $request->input('db_username'),
            $request->input('db_password')
        );
        $user->setToken();
        return ['success' => 1, 'message' => 'Успешно подключено'];
    }
}
