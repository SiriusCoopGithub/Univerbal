<!-- LEFT SIDEBAR	 -->

<div class="sidebar-dashboard-menu navbar-fixed">

    <h5 class="sub-header"><i class="fas fa-list-ul"></i>Missions</h5>
    <hr class="col s12 m4 l12">
    <a class="menu-link" href="dashboard.html" class="">
        <div class="menu-item hoverable">
            <i class="fas fa-hourglass-half"></i><span>En cours</span>
        </div>
    </a>
    <div class="divider"></div>
    <a href="dashboard.html" class="">
        <div class="menu-item hoverable">
            <i class="far fa-calendar-check"></i><span>validées</span>
        </div>
    </a>
    <div class="divider"></div>
    <a href="#">
        <div class="menu-item hoverable">
            <i class="fas fa-history"></i><span>Historique</span>
        </div>
    </a>
    <div class="divider"></div>

    <h5 class="sub-header"><i class="fas fa-user"></i>Utilisateurs</h5>
    <hr class="col s12 m4 l10">

    <a href="{{route('users.index')}}">
        <div class="menu-item hoverable">
            <i class="fas fa-microphone"></i><span>Interpretes<i class=""></i></span>
        </div>
    </a>
    <a href="">
        <div class="menu-item hoverable">
            <i class="fas fa-briefcase"></i><span>Commanditaire<i class=""></i></span>
        </div>
    </a>
    <a href="">
        <div class="menu-item hoverable">
            <i class="fas fa-building"></i><span>Organisations<i class=""></i></span>
        </div>
    </a>

    <h5 class="sub-header">ADMINISTRATION</h5>
    <hr class="col s12 m4 l12">
    <a href="{{route('roles.index')}}">
        <div class="menu-item hoverable">
            <i class="fas fa-user"></i><span>Roles<i class=""></i></span>
        </div>
    </a>
    <a href="{{route('permissions.index')}}">
        <div class="menu-item hoverable">
            <i class="fas fa-user"></i><span>Permissions<i class=""></i></span>
        </div>
    </a>
    <a href="{{route('langues.index')}}">
        <div class="menu-item hoverable">
            <i class="fas fa-user"></i><span>Langues<i class=""></i></span>
        </div>
    </a>
</div>

{{-- <main class="col s12 m4 l2">
    <div class="main-dashboard">
        <div class="logo-dashboard">
            <div class="logo-img">
                <img src="../img/logo.png" alt="">
            </div>

            <div class="univerbal">
                <a href="{{ route('admin.index') }}" class="brand-logo">
                    <p>UNIVERBAL</p>
                    <p class="univerbal-social">Interprétariat Social
                    </p>
                </a>
            </div>
        </div>
    </div> --}}

    {{-- <div class="sidenav ">

        <h5 class=" sub-header">GENERAL</h5>
        <ul>
            <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
        </ul>
        <h5 class=" sub-header">Missions</h5>
        <ul>
            <li><a href="{{ route('admin.index') }}">En Cours</a></li>
            <li><a href="{{ route('admin.index') }}">Disponible</a></li>
            <li><a href="{{ route('admin.index') }}">Historique</a></li>
        </ul>
        <h5 class=" sub-header"><a href="{{route('users.index')}}">Utilisateur</a></h5>
        <ul>
            <li><a href="{{route('users.index')}}">Interprètes</a></li>
            <li><a href="{{ route('admin.index') }}">Commanditaires</a></li>
            <li><a href="{{ route('admin.index') }}">Organisations</a></li>
        </ul>
        @role('superadmin')
        <h5 class="sub-header">ADMINISTRATION</h5>
        <ul>
            <li><a href="{{route('roles.index')}}">Roles</a></li>
            <li><a href="{{route('permissions.index')}}">Permissions</a></li>
            <li><a href="{{route('langues.index')}}">Langues</a></li>
        </ul>
        @endrole
    </div> --}}
