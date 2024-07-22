<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YearController extends Controller
{
    function index(){
        return view('dashboard.year.index');
    }

    function add(){
        return view('dashboard.year.add');
    }

    function edit(){
        return view('dashboard.year.edit');
    }
}
