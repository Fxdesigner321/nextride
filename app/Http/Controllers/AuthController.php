<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function index(){

        $users = DB::select('select * from users where role_id = 4');

        return view('dashboard.auth.index',compact('users'));
    }

    function add(){
        return view('dashboard.auth.add');
    }

    function store(Request $req){

        // dd($req->toArray());
        $req->validate([    
            'fname' =>  'required',
            'lname' =>  'required',
            'email' =>  'required | unique:users,email',
            'phone' =>  'required',
            'password' =>  'required',

        ]);
        $password = Hash::make($req->password);
        Db::insert('insert into users(role_id,fname,lname,email,password,phone_number,gender,status) values(?,?,?,?,?,?,?,?)',
        [4,$req->fname,$req->lname,$req->email,$password,$req->phone , $req->gender,1]);

        return redirect('/dashboard/auth');

    }

    function login(){
        return view('dashboard.auth.login');
    }
    function register(){
        return view('dashboard.auth.register');
    }

    function lock_screen(){
        return view('dashboard.auth.lock_screen');
    }

    function recover_password(){
        return view('dashboard.auth.recover_password');
    }

    function reset_password(){
        return view('dashboard.auth.reset_password');
    }

    function verify_email(){
        return view('dashboard.auth.verify_email');
    }
}
