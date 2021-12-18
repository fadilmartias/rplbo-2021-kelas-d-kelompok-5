<div id="sidebar-menu" class="sidebar-menu">
    <ul>
        <li class="sidebar-item @yield('ajukansurat') "> <a href="{{ route('ajukan-surat.create') }}" class='sidebar-link'><span>Buat Pengajuan Surat</span></a> </li>
        <li class="sidebar-item @yield('ajukanlegalisir') "> <a href="{{ route('ajukan-legalisir.create') }}" class='sidebar-link'><span>Buat Pengajuan Legalisir</span></a> </li>
        <li class="sidebar-item @yield('lacaksurat') "> <a href="{{ route('lacak.create') }}" class='sidebar-link'><span>Lacak Surat</span></a> </li>
    </ul>
</div>
