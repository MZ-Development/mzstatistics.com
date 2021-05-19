<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getAuth()
    {
        return view('auth');
    }

    public function getSign()
    {
        return view('sign');
    }
<<<<<<< Updated upstream

    public function getToken()
    {
        return view('token');
=======
    public function getIdent()
    {
        return view('user_ident');
>>>>>>> Stashed changes
    }
}
