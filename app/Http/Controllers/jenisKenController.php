<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jenisKenController extends Controller
{
    //
    public function JenisKendaraan() {
        return view('admin_dashboard.jenisKen');
    }
}
