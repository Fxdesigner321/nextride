<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VehiclesController extends Controller
{
    function index(){

        $vehicles = DB::select('select * from vehicles where deleted_at is NULL');

        return view('dashboard.vehicles.index',compact('vehicles'));
    }

    function delete($id){

        DB::update('Update vehicles set deleted_at = ? Where id = ?', [now(),$id]);

        return redirect('dashboard/vehicles');
    }

    function store(Request $req){

        // dd($req->toArray());
         $req->validate([    
            'user_id' =>  'required',
            'make' =>  'required',
            'model' =>  'required',
            'year_id' =>  'required',
            'license_plate' =>  'required | unique:vehicles',
            'color' =>  'required',
            'type_id' =>  'required',
        ]);
        // $password = Hash::make($req->password);
        Db::insert('insert into vehicles(user_id,make,model,year_id,license_plate,color,type_id) values(?,?,?,?,?,?,?)',
        [$req->user_id,$req->make,$req->model,$req->year_id, $req->license_plate, $req->color, $req->type_id]);

        return redirect('/dashboard/vehicles');

    }


    function add(){
        return view('dashboard.vehicles.add');
    }

    function edit(){
        return view('dashboard.vehicles.edit');
    }
}
