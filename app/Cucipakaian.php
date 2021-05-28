<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cucipakaian extends Model
{

    
    protected $fillable = [
        'user_id','nname', 'nohp', 'alamat', 'catatan','status','rating',
    ];

    
  
}
