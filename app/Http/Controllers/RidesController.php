<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RidesController extends Controller
{
    function index(){
        return view('dashboard.rides.index');
    }

    function add(){
        return view('dashboard.rides.add');
    }

    function edit(){
        return view('dashboard.rides.edit');
    }
}
