<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BikesController extends Controller
{
    function index(){

        $bikes = DB::select('select * from bikes where deleted_at is NULL');

        return view('dashboard.bike.index',compact('bikes'));
    }

    function delete($id){

        DB::update('Update bikes set deleted_at = ? Where id = ?', [now(),$id]);

        return redirect('dashboard/bike');
    }

    function store(Request $req){

        // dd($req->toArray());
         $req->validate([    
            'user_id' =>  'required',
            'make' =>  'required',
            'model' =>  'required',
            'year_id' =>  'required',
            'license_plate' =>  'required | unique:bikes',
            'color' =>  'required',
            'type_id' =>  'required',
        ]);
        // $password = Hash::make($req->password);
        Db::insert('insert into bikes(user_id,make,model,year_id,license_plate,color,type_id) values(?,?,?,?,?,?,?)',
        [$req->user_id,$req->make,$req->model,$req->year_id, $req->license_plate, $req->color, $req->type_id]);

        return redirect('/dashboard/bike');

    }

    function add(){
        return view('dashboard.bike.add');
    }

    function edit(){
        return view('dashboard.bike.edit');
    }
}
