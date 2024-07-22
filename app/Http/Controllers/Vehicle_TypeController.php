<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vehicle_TypeController extends Controller
{
    function index(){
        return view('dashboard.vehicle_type.index');
    }

    function add(){
        return view('dashboard.vehicle_type.add');
    }

    function edit(){
        return view('dashboard.vehicle_type.edit');
    }
}
