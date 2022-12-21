<aside id="sidebar-wrapper">
    <!-- <div class="sidebar-brand">
        <a href="">{{ config('app.name') }}</a>
    </div> -->
    <!-- <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
    </div> -->
    <ul class="sidebar-menu">
        <!-- <li class="text-center">
            <img class="img-fluid" src="{{ asset('') }}" alt="" height="150">
        </li> -->
        <!-- <hr> -->
        <li class="menu-header">Dashboard</li>
        <li class="{{ request()->is('home') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}"><i
                    class="fas
    fa-home"></i> <span>Dashboard</span></a></li>
        <li class="menu-header">Menu</li>

        @role('ketua')
            <li class="{{ request()->is('posisi-authorisasi') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('authorisasi.index') }}"><i class="fas fa-key"></i> <span>Data
                        Posisi Validasi</span></a></li>
            @elserole('bendahara')
            <li class="{{ request()->is('posisi*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('validasi.index') }}"><i class="fas fa-key"></i> <span>Data
                        Posisi Validasi</span></a></li>
            <li class="{{ request()->is('slip/pencairan') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('slip.index') }}"><i class="fas fa-print"></i> <span>Slip Pencairan</span></a></li>
            <li class="{{ request()->is('laporan/jurnal/bendahara') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('laporan.jurnal-bendahara') }}"><i class="fas fa-sticky-note"></i>
                    <span>Jurnal</span></a></li>
            @elserole('admin')
            <li class="{{ request()->is('lahan*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('lahan.index') }}"><i class="fas
    fa-archive"></i>
                    <span>Data Lahan</span></a></li>
            <li class="{{ request()->is('posisi*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('posisi.index') }}"><i class="fas fa-map-marker"></i> <span>Letak Koordinat
                        Lahan</span></a></li>
            <li class="{{ request()->is('tanaman*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('tanaman.index') }}"><i class="fas fa-credit-card"></i> <span>Jenis Tanaman &
                        Posisi</span></a></li>
            @elserole('guest')
            <li class="{{ request()->is('lahan*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('lahan.create') }}"><i class="fas
    fa-credit-card"></i>
                    <span>Entry Data Lahan</span></a></li>
        @endrole
    </ul>
</aside>
