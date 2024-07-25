<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function index(){
        return view('dashboard.auth.index');
    }

    function register(){
        return view('dashboard.auth.register');
    }

    function lock_screen(){
        return view('dashboard.auth.lock_screen');
    }

    function recover_password(){
        return view('dashboard.auth.recover_password');
    }

    function reset_password(){
        return view('dashboard.auth.reset_password');
    }

    function verify_email(){
        return view('dashboard.auth.verify_email');
    }
}
