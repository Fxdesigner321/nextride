<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    function index(){

        $users = DB::select('select * from users where deleted_at is NULL');

        return view('dashboard.auth.index',compact('users'));

    }

    function delete($id){

        DB::update('update users set deleted_at = ? where id = ?', [now(),$id]);

        return redirect('dashboard/auth');
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
        return view('auth.login');
    }
    
    function loginstore(Request $req){

        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);


    }

    
    function register(){
        return view('auth.register');
    }
    
    function registerstore(Request $req){

                // dd($req->toArray());
                $req->validate([    
                    'first_name' =>  'required',
                    'last_name' =>  'required',
                    'email' =>  'required | unique:users,email',
                    'password' =>  'required',
                    'password_confirmation' =>  'required | same:password',
        
                ]);

                
                $password = Hash::make($req->password);

                Db::insert('insert into users(role_id,fname,lname,email,password,phone_number,gender,status) values(?,?,?,?,?,?,?,?)',
                [4,$req->first_name,$req->last_name,$req->email,$password,'NULL', 1 ,1]);
                
                return redirect('/login');
    }


    function logout(){

        Auth::logout();

        return redirect('/login');
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
