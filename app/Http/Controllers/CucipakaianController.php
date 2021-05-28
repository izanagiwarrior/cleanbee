<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cucipakaian;

use Redirect, Response;

class CucipakaianController extends Controller
{
    public function index(){
        return view('cucipakaian');
    }

    public function store(Request $request){
        $data = request()->validate([
            'user_id'=>'required',
            'nname'=>'required',
            'nohp'=>'required',
            'alamat'=>'required',
            'catatan'=>'required'
        ]); 
        Cucipakaian::create($data);
        return Redirect::to('cucipakaian-form')->withSuccess('Great! Your order is in process now!');
    }
}
