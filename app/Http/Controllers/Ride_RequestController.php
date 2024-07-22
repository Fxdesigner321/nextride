<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ride_RequestController extends Controller
{
    function index(){
        return view('dashboard.ride_request.index');
    }

    function add(){
        return view('dashboard.ride_request.add');
    }

    function edit(){
        return view('dashboard.ride_request.edit');
    }
}
