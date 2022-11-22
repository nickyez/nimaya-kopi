<ul class="navbar-nav bg-app-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="{{ asset('img/logo.png') }}" alt="" class="bg-light p-2 rounded img-fluid">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(Request::url() == url('/admin')) active @endif">
        <a class="nav-link" href="{{ url('/admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manajemen Konten
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(Request::url() == url('/admin/article')) active @endif">
        <a class="nav-link" href="{{ url('/admin/article') }}">
            <i class="fas fa-newspaper"></i>
            <span>Artikel</span></a>
    </li>

    <li class="nav-item @if(Request::url() == url('/admin/course')) active @endif">
        <a class="nav-link" href="{{ url('/admin/course') }}">
            <i class="fas fa-book"></i>
            <span>Kursus</span></a>
    </li>
    <li class="nav-item @if(Request::url() == url('/admin/class')) active @endif">
        <a class="nav-link" href="{{ url('/admin/class') }}">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>Kelas</span></a>
    </li>
    <li class="nav-item @if(Request::url() == url('/admin/forum-topic')) active @endif">
        <a class="nav-link" href="{{ url('/admin/forum-topic') }}">
            <i class="fas fa-align-justify"></i>
            <span>Topik dalam Forum</span></a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item @if(Request::url() == url('/admin/faq')) active @endif">
        <a class="nav-link" href="{{ url('/admin/faq') }}">
            <i class="fas fa-question-circle"></i>
            <span>FAQ</span></a>
    </li>
    <li class="nav-item @if(Request::url() == url('/admin/socmed')) active @endif">
        <a class="nav-link" href="{{ url('/admin/socmed') }}">
            <i class="fas fa-hashtag"></i>
            <span>Sosmed</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Manajemen Pengguna
    </div>
    <li class="nav-item @if(Request::url() == url('/admin/user')) active @endif">
        <a class="nav-link" href="{{ url('/admin/user') }}">
            <i class="fas fa-user"></i>
            <span>User</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
