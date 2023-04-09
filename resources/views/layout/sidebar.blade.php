<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">IMPLEMENTASI PANCASILA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/pengantar') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/pengantar">
            <span>Pengantar</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Urutan Sila
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('admin/pertama') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/pertama">
            <span>Pertama</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('admin/kedua') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/kedua">
            <span>Kedua</span></a>
    </li>


    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('admin/ketiga') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/ketiga">
            <span>Ketiga</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('admin/keempat') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/keempat">
            <span>Keempat</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('admin/kelima') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/kelima">
            <span>Kelima</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
