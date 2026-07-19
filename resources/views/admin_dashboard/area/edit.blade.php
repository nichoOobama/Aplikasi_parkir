@extends('layouts.admin')

 @section('title', ' - Edit Area Parkir')

 @section('content')
    <div class="modal-header">
        <h5 class="modal-title" id="modalTambahAreaLabel">Tambah Area Parkir Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="{{ route('area.update', $area->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama_area" class="form-label">Nama Area</label>
                <input type="text" value="{{ $area->nama_area }}" class="form-control" name="nama_area" placeholder="Contoh: Parkiran Utara" required>
            </div>
            <div class="mb-3">
                <label for="kapasitas" class="form-label">Kapasitas (Jumlah Kendaraan)</label>
                <input type="number" value="{{$area -> kapasitas}}" class="form-control" name="kapasitas" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Tensi</label>
                <select value="{{$area -> tensi}}" class="form-select" name="tensi" required>
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary m-2">Simpan Data</button>
        </div>
    </form>
@endsection