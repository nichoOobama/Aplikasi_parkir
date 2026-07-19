@extends('layouts.admin')
@section('title', ' - Tarif Parkir')
@section('content')
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center">
        <div>
            <h2 class="h4">Tarif Parkir</h2>
            <p class="text-muted">Kelola lokasi dan kapasitas area parkir di sini.</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalTambahArea">
            <i class="bi bi-plus-lg"></i> Tambah Tarif
        </button>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Jenis</th>
                        <th>Nama Kendaraan</th>
                        <th>Tarif/jam</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tarif as $t)
                    <tr>
                        <td>{{ $t -> id}}</td>
                        <td><span class="badge bg-secondary">{{ $t -> jenis_kendaraan}}</span></td>
                        <td>{{ $t -> nama_kendaraan}}</td>
                        <td>{{ $t -> tarif_perjam}}</td>
                        <td class="text-center">
                              <a class="btn btn-sm btn-warning text-white" title="Edit" href="{{route('tarif.edit', $t->id)}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{route('tarif.destroy', $t->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                <i class="bi bi-trash"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalTambahArea" tabindex="-1" aria-labelledby="modalTambahAreaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahAreaLabel">Tambah Area Parkir Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('tarif.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="status" class="form-label">Jenis</label>
                        <select class="form-select" name="jenis_kendaraan" required>
                            <option value="Montor">Montor</option>
                            <option value="Mobil">Mobil</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Nama Kendaraan</label>
                        <input type="text" class="form-control" name="nama_kendaraan" required>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Tarif Perjam</label>
                        <input type="number" class="form-control" name="tarif_perjam" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
</main>
</div>
@endsection