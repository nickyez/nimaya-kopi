<ul class="navbar-nav bg-app-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/course')}}">
        <img src="{{ asset('img/logo2.png') }}" alt="" class="p-2 img-fluid">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @foreach ($class as $item)
        <li class="nav-item @if ($item->id == $class_item->id) active @endif">
            <a class="nav-link" href="{{ url('/course/detail') . '/' . $item->course_id . '/' . $item->nama_kelas }}">
                <i class="fas fa-circle"></i>
                <span>{{ $item->nama_kelas }}</span></a>
        </li>
    @endforeach
    <!-- Nav Item - Pages Collapse Menu -->

    <a href="{{ url('/course') }}" class="mx-3 my-3 btn btn-light">Kembali ke Halaman Utama</a>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
