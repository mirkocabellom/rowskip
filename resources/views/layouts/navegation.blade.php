<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('panel') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-stethoscope" style="font-size: 3em;"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SkipRow</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('monitor') }}"><span>Monitor</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('estacion') }}"><span>Estaciones</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gestor_estacion') }}"><span>Gestor estaciones</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('usuario') }}"><span>Usuarios</span></a>
    </li>


    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>