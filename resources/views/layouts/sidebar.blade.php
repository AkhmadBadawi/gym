<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-dumbbell"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MonsterGYM</div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href={{ url('/dashboard') }}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Member -->
    <li class="nav-item {{ request()->is('members') ? 'active' : '' }}">
        <a class="nav-link" href={{ url('/members') }}>
            <i class="fas fa-fw fa-user"></i>
            <span>Member</span></a>
    </li>

    <!-- Nav Item - Users -->
    <li class="nav-item {{ request()->is('users') ? 'active' : '' }}">
        <a class="nav-link" href={{ url('/users') }}>
            <i class="fa-solid fa-users"></i>
            <span>Users</span></a>
    </li>

    <!-- Nav Item - Activity -->
    <li class="nav-item {{ request()->is('activity') ? 'active' : '' }}">
        <a class="nav-link" href={{ url('/activity') }}>
            <i class="fas fa-fw fa-chart-line"></i>
            <span>Activity</span></a>
    </li>


    {{-- <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> --}}



</ul>
<!-- End of Sidebar -->
