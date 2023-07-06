<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('panel') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-stethoscope" style="font-size: 3em;"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SkipRow</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}"><span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('usuario') }}"><span>Usuarios</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('estacion') }}"><span>Estaciones</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gestor_estacion') }}"><span>Gestor estaciones</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
            <i class="fas fa-fw fa-folder"></i>
            <span>Modulo Agenda</span>
            <i class="fas fa-angle-down" style="float:right; margin-top: 5px;"></i>
        </a>

        <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Adm. Agendas:</h6>
                    <a class="collapse-item" href="{{ route('agenda') }}">Agendas</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Citas:</h6>
                    <a class="collapse-item" href="{{ route('citas') }}">Citas</a>
                </div>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>