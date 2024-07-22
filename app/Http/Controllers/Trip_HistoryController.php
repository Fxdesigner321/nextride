<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Trip_HistoryController extends Controller
{
    function index(){
        return view('dashboard.trip_history.index');
    }

    function add(){
        return view('dashboard.trip_history.add');
    }

    function edit(){
        return view('dashboard.trip_history.edit');
    }
}
