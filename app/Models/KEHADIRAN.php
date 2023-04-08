<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KEHADIRAN extends Model
{
    use HasFactory;
}
protected $table = 'kehadiran'
protected $filltable = [
    'user_id',
    'jam_masuk',
    'jam_keluar',
    'status',
]
}
