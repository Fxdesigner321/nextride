<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    function index(){
        return view('dashboard.location.index');
    }

    function add(){
        return view('dashboard.location.add');
    }

    function edit(){
        return view('dashboard.location.edit');
    }
}
