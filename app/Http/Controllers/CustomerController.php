<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CustomerController extends Controller
{
    function index(){

        $customers = DB::select('select * from customers where deleted_at is NULL');

        return view('dashboard.customer.index',compact('customers'));
    }

    function delete($id){

        DB::update('Update customers set deleted_at = ? Where id = ?', [now(),$id]);

        return redirect('dashboard/customer');
    }

    function add(){
        return view('dashboard.customer.add');
    }

    function store(Request $req){

        // dd($req->toArray());
        $req->validate([    
            // 'fname' =>  'required',
            // 'lname' =>  'required',
            'email' =>  'required | unique:customers,email',
            'phone' =>  'required',
            'password' =>  'required',

        ]);
        $password = Hash::make($req->password);
        Db::insert('insert into customers(email,password_hash,phone_number) values(?,?,?)',
        [$req->email,$req->password,$req->phone]);

        return redirect('/dashboard/customer');

    }

    function edit(){
        return view('dashboard.customer.edit');
    }
}
