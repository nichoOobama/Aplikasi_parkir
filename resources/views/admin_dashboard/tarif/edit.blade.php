@extends('layouts.admin')

 @section('title', ' - Edit Tarif Parkir')

 @section('content')
    <div class="modal-header">
        <h5 class="modal-title" id="modalTambahAreaLabel">Tambah Area Parkir Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="{{route('tarif.update', $tarif->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="status" class="form-label">Jenis</label>
                        <select class="form-select" name="jenis_kendaraan" value='{{ $tarif -> jenis_kendaraan}}'; required>
                            <option value="Montor">Montor</option>
                            <option value="Mobil">Mobil</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Nama Kendaraan</label>
                        <input type="text" value='{{ $tarif -> nama_kendaraan}}'; class="form-control" name="nama_kendaraan" required>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Tarif Perjam</label>
                        <input type="number" value='{{ $tarif -> tarif_perjam}}'; class="form-control" name="tarif_perjam" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
@endsection