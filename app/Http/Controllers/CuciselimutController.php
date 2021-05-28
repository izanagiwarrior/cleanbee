<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuciselimut;

use Redirect, Response;

class CuciselimutController extends Controller
{
    public function index(){
        return view('cuciselimut');
    }

    public function store(Request $request){
        $data = request()->validate([
            'user_id'=>'required',
            'nname'=>'required',
            'nohp'=>'required',
            'alamat'=>'required',
            'catatan'=>'required'
        ]); 
        Cuciselimut::create($data);
        return Redirect::to('cuciselimut-form')->withSuccess('Great! Your order is in process now!');
    }
}
