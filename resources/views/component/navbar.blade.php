<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar py-3">
            <h4 class="text-center mb-4">🅿️ SIM PARKIR</h4>
            <div class="px-2">
                <small class="text-muted text-uppercase">Menu Utama</small>
                <a href="{{route('dashboard.admin')}}" class="mt-2 {{ request()->routeIs('dashboard.admin') ? 'active' : '' }}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>

                <small class="text-muted text-uppercase mt-4 d-block">Manajemen Master</small>
                <a href="{{route('dashboard.area')}}" class="mt-2 {{ request()->routeIs('dashboard.area') ? 'active' : '' }}"><i class="bi bi-signpost-split me-2"></i> Area Parkir</a>
                <a href="{{route('dashboard.jenis')}}" class="mt-2 {{ request()->routeIs('dashboard.jenis') ? 'active' : '' }}"><i class="bi bi-car-front me-2"></i> Jenis Kendaraan</a>
                <a href="{{route('dashboard.tarif')}}" class="mt-2 {{ request()->routeIs('dashboard.tarif') ? 'active' : '' }}"><i class="bi bi-tags me-2"></i> Tarif Parkir</a>

                <small class="text-muted text-uppercase mt-4 d-block">Laporan</small>
                <a href="{{route('dashboard.logAktivitas')}}" class="mt-2 {{ request()->routeIs('dashboard.logAktivitas') ? 'active' : '' }}"><i class="bi bi-journal-text me-2"></i> Log Aktivitas</a>
            </div>
        </nav>

       