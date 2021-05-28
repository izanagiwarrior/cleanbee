<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cucisepatu;

use Redirect, Response;

class CucisepatuController extends Controller
{
    public function index(){
        return view('cucisepatu');
    }

    public function store(Request $request){
        $data = request()->validate([
            'user_id'=>'required',
            'nname'=>'required',
            'nohp'=>'required',
            'alamat'=>'required',
            'catatan'=>'required'
        ]); 
        Cucisepatu::create($data);
        return Redirect::to('cuciselimut-form')->withSuccess('Great! Your order is in process now!');
    }
}
