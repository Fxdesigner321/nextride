<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    function index(){
        return view('dashboard.notification.index');
    }

    function add(){
        return view('dashboard.notification.add');
    }

    function edit(){
        return view('dashboard.notification.edit');
    }
}
