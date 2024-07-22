<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    function index(){
        return view('dashboard.driver.index');
    }

    function add(){
        return view('dashboard.driver.add');
    }

    function edit(){
        return view('dashboard.driver.edit');
    }
}
