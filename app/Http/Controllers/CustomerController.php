<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(){
        return view('dashboard.customer.index');
    }

    function add(){
        return view('dashboard.customer.add');
    }

    function edit(){
        return view('dashboard.customer.edit');
    }
}
