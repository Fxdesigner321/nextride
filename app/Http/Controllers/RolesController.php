<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    function index(){
        return view('dashboard.roles.index');
    }

    function add(){
        return view('dashboard.roles.add');
    }

    function edit(){
        return view('dashboard.roles.edit');
    }
}
