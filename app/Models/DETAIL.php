<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DETAIL extends Model
{
    use HasFactory;
}
protected $table = 'ditail'
protected $filltable = [
    'user_id',
    'alamat',
    'no_hp',
    
]
}