<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JABATAN extends Model
{
    use HasFactory;
}
protected $table = 'jabatan'
protected $filltable = [
    'user_id',
    'nama_jabatan',
    'tunjangan',
]
}