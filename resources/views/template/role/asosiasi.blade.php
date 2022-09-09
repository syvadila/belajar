<li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">



<!-- Nav Item - Tables -->
<li class="nav-item  {{ request()->is('user/konsultasi') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('user/konsultasi')}}">
        <i class="fas fa-fw fa-table"></i>
        <span> Konsultasi</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item  {{ request()->is('user/design') ? 'active' : '' }}">
    <a class="nav-link" href="{{url('user/design')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Design</span></a>
</li>