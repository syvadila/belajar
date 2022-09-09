<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('public/image/logo.png')}}" style="width:35px;" alt="" srcset="">
        </div>
        <div class="sidebar-brand-text mx-3">Rumah<sup>Kreatif</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    
    @if(Auth::user()->role == 'admin') 
        @include('template.role.admin')
    @elseif(Auth::user()->role == 'asosiasi') 
        @include('template.role.asosiasi')
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>