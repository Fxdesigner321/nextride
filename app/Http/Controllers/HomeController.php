<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    
    function index(){
 
        return view('index');
    }

    function about(){
        
        return view('about');
    }

    function blog(){
        
        return view('blog');
    }
    
    function buses(){
        
        return view('buses');
    }

    function cardetails(){
        
        return view('cardetails');
    }

    function career(){
        
        return view('career');
    }

    function contact(){
        
        return view('contact');
    }

    function drive(){
        
        return view('drive');
    }

    function ride(){
        
        return view('ride');
    }

    function faq(){
        
        return view('faq');
    }

    function picnic(){
        
        return view('picnic');
    }

    function post(){
        
        return view('post');
    }
    
    function price(){
        
        return view('price');
    }

    function rentacar(){
        
        return view('rentacar');
    }

    function teamsingle(){
        
        return view('teamsingle');
    }



}
