<div id="sidebar-menu" class="sidebar-menu">
    <ul>
        @if (Auth::user()->role === 'Resepsionis' || Auth::user()->role === 'Staff TU')
        <li class="sidebar-item @yield('dashboard') "> <a href="{{ route('dashboard') }}" class='sidebar-link'><span>Dashboard</span></a> </li>
        <li class="sidebar-item @yield('pengajuansurat') "> <a href="{{ route('pengajuansurat.index') }}" class='sidebar-link'><span>Pengajuan Surat Keluar</span></a> </li>
        <li class="sidebar-item @yield('pengajuanlegalisir') "> <a href="{{ route('pengajuanlegalisir.index') }}" class='sidebar-link'> <span>Pengajuan Legalisir</span></a> </li>
        @elseif (Auth::user()->role === 'Kepala TU' || Auth::user()->role === 'Kepala Sekolah')
        <li class="sidebar-item @yield('dashboard') "> <a href="{{ route('dashboard') }}" class='sidebar-link'><span>Dashboard</span></a> </li>
        <li class="sidebar-item @yield('pengajuansurat') "> <a href="{{ route('pengajuansurat.index') }}" class='sidebar-link'><span>Pengajuan Surat Keluar</span></a> </li>
        <li class="sidebar-item @yield('pengajuanlegalisir') "> <a href="{{ route('pengajuanlegalisir.index') }}" class='sidebar-link'> <span>Pengajuan Legalisir</span></a> </li>
        <li class="sidebar-item @yield('kelolauser') "> <a href="{{ route('user.index') }}" class='sidebar-link'><span>Kelola User</span></a> </li>
        @else
        <li class="sidebar-item @yield('ajukansurat') "> <a href="{{ route('ajukan-surat.create') }}" class='sidebar-link'><span>Buat Pengajuan Surat</span></a> </li>
        <li class="sidebar-item @yield('ajukanlegalisir') "> <a href="{{ route('ajukan-legalisir.create') }}" class='sidebar-link'><span>Buat Pengajuan Legalisir</span></a> </li>
        <li class="sidebar-item @yield('lacaksurat') "> <a href="{{ route('lacak.create') }}" class='sidebar-link'><span>Lacak Surat</span></a> </li>
        @endif
    </ul>
</div>
