 @extends('layouts.admin')

 @section('title', ' - Area Parkir')

 @section('content')
 <div class="row mb-4">
     <div class="col-12 d-flex justify-content-between align-items-center">
         <div>
             <h2 class="h4">Daftar Area Parkir</h2>
             <p class="text-muted">Kelola lokasi dan kapasitas area parkir di sini.</p>
         </div>
         <button class="btn btn-primary" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalTambahArea">
             <i class="bi bi-plus-lg"></i> Tambah Area
         </button>
     </div>
 </div>

 <div class="card shadow-sm border-0">
     <div class="card-body">
         <div class="table-responsive">
             <table class="table table-hover table-striped align-middle">
                 <thead class="table-dark">
                     <tr>
                         <th>Kode Area</th>
                         <th>Nama Area</th>
                         <th>Kapasitas</th>
                         <th>Status</th>
                         <th class="text-center">Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach ($area as $a)
                    <tr>
                         <td><span class="badge bg-secondary">{{ $loop -> iteration }}</span></td>
                         <td>{{ $a -> nama_area }}</td>
                         <td>{{ $a -> kapasitas }}</td>
                         <td><span class="badge {{ $a -> tensi === 1? 'bg-success' : 'bg-danger' }}">{{ $a -> tensi === 1? 'Tersedia' : 'Tidak Tersedia' }}</span></td>
                         <td class="text-center">
                            <a class="btn btn-sm btn-warning text-white" title="Edit" href="{{route('area.edit', $a->id)}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                             <form action="{{route('area.destroy', $a->id)}}" method="POST">
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
             <form action="{{ route('area.store') }}" method="POST">
                 @csrf
                 <div class="modal-body">
                     <div class="mb-3">
                         <label for="nama_area" class="form-label">Nama Area</label>
                         <input type="text" class="form-control" name="nama_area" placeholder="Contoh: Parkiran Utara" required>
                     </div>
                     <div class="mb-3">
                         <label for="kapasitas" class="form-label">Kapasitas (Jumlah Kendaraan)</label>
                         <input type="number" class="form-control" name="kapasitas" required>
                     </div>
                     <div class="mb-3">
                         <label for="status" class="form-label">Tensi</label>
                         <select class="form-select" name="tensi" required>
                             <option value="1">Tersedia</option>
                             <option value="0">Tidak Tersedia</option>
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
 @endsection