<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    function index(){
        return view('dashboard.rating.index');
    }

    function add(){
        return view('dashboard.rating.add');
    }

    function edit(){
        return view('dashboard.rating.edit');
    }
}
