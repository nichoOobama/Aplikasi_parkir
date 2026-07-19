<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\area_parkir;

class areaController extends Controller
{
    //
    public function area() {
        $area = area_parkir::all();
        return view('admin_dashboard.area.area', compact('area'));
    }

    public function store (Request $request) {
        $validated = $request->validate ([
            'nama_area' => 'required',
            'kapasitas' => 'required',
            'tensi' => 'required',
        ]);

        $create = area_parkir::create([
            'nama_area' => $request->nama_area,
            'kapasitas' => $request->kapasitas,
            'tensi' => $request->tensi,
        ]);

        if ($create) {
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Data gagal disimpan');
    }

    public function edit ($id) {
        $area = area_parkir::find($id);
        return view('admin_dashboard.area.edit', compact('area'));
    }

    public function update (Request $request, $id) {
        $area = area_parkir::find($id);
        $area->update([
            'nama_area' => $request->nama_area,
            'kapasitas' => $request->kapasitas,
            'tensi' => $request->tensi,
        ]);
        return redirect()->route('dashboard.area');
    }

    public function destroy ($id) {
        $area = area_parkir::find($id);
        $area->delete();
        return redirect()->back();
    }
}
