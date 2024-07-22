<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bikesController extends Controller
{
    function index(){
        return view('dashboard.bike.index');
    }

    function add(){
        return view('dashboard.bike.add');
    }

    function edit(){
        return view('dashboard.bike.edit');
    }
}
