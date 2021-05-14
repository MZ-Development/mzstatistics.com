<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'login',
        'password'
    ];

    public function setToken()
    {
        $token = random_bytes(15);
        $token = bin2hex($token);
        DB::table('users')->where('id', Auth::user()->id)->update(['token'=>$token]);
    }

    public function saveClientDatabase($site, $db_host, $db_port, $db_name, $db_username, $db_password)
    {
        DB::table('users')->where('id', Auth::user()->id)->update([
            'site' => $site,
            'db_host' => $db_host,
            'db_port' => $db_port,
            'db_name' => $db_name,
            'db_username' => $db_username,
            'db_password' => Hash::make($db_password),
        ]);
    }

    public function saveUser($name, $email, $phone, $login, $password)
    {
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'login' => $login,
            'password' => Hash::make($password)
        ]);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

}
