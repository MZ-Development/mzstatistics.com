<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ClientDatabase;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    const ERROR = [
        0 => 'Ошибка подключения',
    ];

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function Sign(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:30'
        ]);
        $user = new User();
        $user->save(
            $request->input('email'),
            $request->input('password')
        );
        if($user) {
            return redirect()->route('auth');
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
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

        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function setToken(Request $request): array
    {
        $validate = $request->validate([
           'db_host' => 'required|min:6',
           'db_port' => 'required|min:4|max:4',
           'db_name' => 'required|min:4',
           'db_username' => 'required|min:4',
           'db_password' => 'required|min:4'
         ]);
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
