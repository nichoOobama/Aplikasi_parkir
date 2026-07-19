<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class area_parkir extends Model
{
    //
    protected $fillable = [
        'nama_area',
        'kapasitas',
        'tensi',
    ];
}
