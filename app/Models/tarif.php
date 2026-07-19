<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tarif extends Model
{
    //
    protected $fillable = [
        'jenis_kendaraan',
        'nama_kendaraan',
        'tarif_perjam'
    ];
}
