@extends('layouts.admin')
@section('title', ' - Log Aktivitas')
@section('content')
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center">
        <div>
            <h2 class="h4">Log Aktivitas</h2>
            <p class="text-muted">Kelola lokasi dan kapasitas area parkir di sini.</p>
        </div>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th class="text-center">Log</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Udin</td>
                        <td><span class="badge bg-secondary">A1</span></td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td class="text-center">
                            Log
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection