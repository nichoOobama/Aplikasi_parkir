<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarif;

class tarifController extends Controller
{
    //
     public function tarif() {
        $tarif = tarif::all();
        $amount = tarif::get(['tarif_perjam']);
        return view('admin_dashboard.tarif.tarif', compact('tarif', 'amount'));
    }



    public function store(Request $request) {
        $validated = $request->validate ([
            'jenis_kendaraan' => 'required',
            'nama_kendaraan' => 'required',
            'tarif_perjam' => 'required',
        ]);

        $create = tarif::create([
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'nama_kendaraan' => $request->nama_kendaraan,
            'tarif_perjam' => $request->tarif_perjam
        ]);

        if ($create) {
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Data gagal disimpan');
    }

    public function edit ($id) {
        $tarif = tarif::find($id);
        return view('admin_dashboard.tarif.edit', compact('tarif'));
    }

    public function update (Request $request, $id) {
        $tarif = tarif::find($id);
        $tarif->update([
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'nama_kendaraan' => $request->nama_kendaraan,
            'tarif_perjam' => $request->tarif_perjam
        ]);
        return redirect()->route('dashboard.tarif');
    }

    public function destroy ($id) {
        $tarif = tarif::find($id);
        $tarif->delete();
        return redirect()->back();
    }

}
