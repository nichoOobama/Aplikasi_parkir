@extends('layouts.admin')
@section('title', ' - Jenis Kendaraan')
@section('content')
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center">
        <div>
            <h2 class="h4">Jenis Kendaraan</h2>
            <p class="text-muted">Kelola lokasi dan kapasitas area parkir di sini.</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalTambahArea">
            <i class="bi bi-plus-lg"></i> Tambah Kendaraan
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
                        <th>Jenis Kendaraan</th>
                        <th>Plat Nomor</th>
                        <th>Pemilik</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><span class="badge bg-secondary">Truck</span></td>
                        <td>BE 4040 FE</td>
                        <td>Udin</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning text-white" title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" title="Hapus">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
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
            <form action="#" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kode_area" class="form-label">Kode Area</label>
                        <input type="text" class="form-control" id="kode_area" placeholder="Contoh: A1" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_area" class="form-label">Nama Area</label>
                        <input type="text" class="form-control" id="nama_area" placeholder="Contoh: Parkiran Utara" required>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Kapasitas (Jumlah Kendaraan)</label>
                        <input type="number" class="form-control" id="kapasitas" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" required>
                            <option value="1">Aktif</option>
                            <option value="0">Non-Aktif</option>
                        </select>
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
</div>
@endsection