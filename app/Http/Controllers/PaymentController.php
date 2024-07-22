<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function index(){
        return view('dashboard.payment.index');
    }

    function add(){
        return view('dashboard.payment.add');
    }

    function edit(){
        return view('dashboard.payment.edit');
    }
}
