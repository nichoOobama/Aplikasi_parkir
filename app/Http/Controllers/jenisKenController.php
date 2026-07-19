<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jenisKenController extends Controller
{
    //
    public function kendaraan() {
        return view('admin_dashboard.kendaraan');
    }
}
