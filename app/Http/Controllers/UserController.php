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

    function account_setting(){
        return view('dashboard.user.account_setting');
    }
    
    function privacy_setting(){
        return view('dashboard.user.privacy_setting');
    }

    function profile_edit(){
        return view('dashboard.user.profile_edit');
    }
}
