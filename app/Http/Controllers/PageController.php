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

    public function getToken()
    {
        return view('token');
    }
}
