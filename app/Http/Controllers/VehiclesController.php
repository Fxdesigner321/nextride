<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    function index(){
        return view('dashboard.vehicles.index');
    }

    function add(){
        return view('dashboard.vehicles.add');
    }

    function edit(){
        return view('dashboard.vehicles.edit');
    }
}
