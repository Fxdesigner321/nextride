<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bike_TypeController extends Controller
{
    function index(){
        return view('dashboard.bike_type.index');
    }

    function add(){
        return view('dashboard.bike_type.add');
    }

    function edit(){
        return view('dashboard.bike_type.edit');
    }
}
