<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
{
    function index(){

        $drivers = DB::select('select * from drivers where deleted_at is NULL');

        return view('dashboard.driver.index',compact('drivers'));
    }

    function delete($id){

        DB::update('Update drivers set deleted_at = ? Where id = ?', [now(),$id]);

        return redirect('dashboard/driver');
    }


    function store(Request $req){

        // dd($req->toArray());
         // dd($req->toArray());
         $req->validate([    
            'cnic_back_side' =>  'required',
            'cnic_front_side' =>  'required',
            'driving_license' =>  'required | unique:drivers',
            'vehicle_registration' =>  'required',
            'vehicle_id' =>  'required | unique:drivers',
            'phonenumber' =>  'required',

        ]);
        // $password = Hash::make($req->password);
        Db::insert('insert into drivers(cnic_back_side,cnic_front_side,photo,driving_license,vehicle_registration,vehicle_id,phonenumber) values(?,?,?,?,?,?,?)',
        [$req->cnic_back_side,$req->cnic_front_side,$req->photo,$req->driving_license, $req->vehicle_registration, $req->vehicle_id, $req->phonenumber]);

        return redirect('/dashboard/driver');

    }

    function add(){
        return view('dashboard.driver.add');
    }

    function edit(){
        return view('dashboard.driver.edit');
    }
}
