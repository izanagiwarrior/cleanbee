<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cucisepatu extends Model
{

    
    protected $fillable = [
        'user_id','nname', 'nohp', 'alamat', 'catatan','status','rating',
    ];

    
  
}
