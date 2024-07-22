<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('dashboard.user.index');
    }

    function add(){
        return view('dashboard.user.add');
    }

    function edit(){
        return view('dashboard.user.edit');
    }
}
