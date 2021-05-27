<?php

namespace App\Http\Controllers\Account;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('profile');
    }

    public function update()
    {
        request()->validate([
            'old_password' => 'required',
            'password' => 'required',

        ]);

        $currentPassword = auth()->user()->password;
        $old_password = request('old_password');

        if (Hash::check($old_password, $currentPassword)){
            auth()->user()->update([
                'password' =>Hash::make(request('password')),
            ]);
            return back()->with(['success'=> 'Your password has been changed']);
        }else{
            return back()->withErrors(['old_password'=> 'Your current password is incorrect']);
        }
    }
}

