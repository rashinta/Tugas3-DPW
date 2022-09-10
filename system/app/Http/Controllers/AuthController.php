<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    function showlogin()
    {
        return view('login');
    }
}