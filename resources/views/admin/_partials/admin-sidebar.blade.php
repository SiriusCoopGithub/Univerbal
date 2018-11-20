<!-- LEFT SIDEBAR	 -->
{{-- {{dd(Request::path())}} --}}
<div class="sidebar-dashboard-menu">
    <div class="row">
        <div class="col s12 m4 l12">

            <a href="{{route('missions.index')}}" class="menu-title {{ setActive('admin/missions', 'active') }}">
                <h5 class="sub-header hoverable">
                    <span>
                        <i class="fas fa-list-ul"></i>
                        MISSIONS
                    </span>
                </h5>
            </a>

            <div class="divider menu-sidebar"></div>

            <a class="menu-link" href="{{route('missions.index')}}" class="">
                <div class="menu-item hoverable valign-wrapper">
                    <span>
                        <i class="fas fa-hourglass-half"></i>
                        En cours
                    </span>
                </div>
            </a>

            <div class="divider divider-link"></div>

            <a href="{{route('missions.index')}}" class="">
                <div class="menu-item hoverable valign-wrapper">
                    <span>
                        <i class="far fa-calendar-check"></i>
                        validées
                    </span>
                </div>
            </a>

            <div class="divider divider-link"></div>

            <a href="#">
                <div class="menu-item hoverable valign-wrapper">
                    <span>
                        <i class="fas fa-history"></i>
                        Historique
                    </span>
                </div>
            </a>


            <div class="divider divider-link"></div>
            <a href="{{route('users.index')}}" class="menu-title {{ setActive('admin/users', 'active') }}">
                <h5 class="sub-header hoverable">
                    <span>
                        <i class="fas fa-user"></i>
                        UTILISATEURS
                    </span>
                </h5>
            </a>

            <div class="divider menu-sidebar"></div>

            <a href="{{route('users.index')}}">
                <div class="menu-item hoverable valign-wrapper">
                    <span>
                        <i class="fas fa-microphone"></i>
                        Interpretes
                    </span>
                </div>
            </a>

            <div class="divider divider-link"></div>

            <a href="">
                <div class="menu-item hoverable valign-wrapper">
                    <span>
                        <i class="fas fa-briefcase"></i>
                        Commanditaire
                    </span>
                </div>
            </a>

            <div class="divider divider-link"></div>

            <a href="{{route('organisations.index')}}">
                <div class="menu-item hoverable valign-wrapper">
                    <span>
                        <i class="fas fa-building"></i>
                        Organisations
                    </span>
                </div>
            </a>


            <div class="divider divider-link"></div>


            <a href="{{route('users.index')}}" class="menu-title ">
                <h5 class="sub-header hoverable">
                    <span>
                        <i class="fas fa-tachometer-alt"></i>
                        ADMINISTRATION
                    </span>
                </h5>
            </a>

            <div class="divider menu-sidebar"></div>

            <a href="{{route('roles.index')}}" class="menu-item {{ setActive('admin/roles', 'active') }}">
                <div class="menu-item hoverable valign-wrapper">
                    <span>
                        <i class="fas fa-address-card"></i>
                        Roles
                    </span>
                </div>
            </a>
            <div class="divider divider-link"></div>
            <a href="{{route('permissions.index')}}" class="menu-title {{ setActive('admin/permissions', 'active') }}">
                <div class="menu-item hoverable valign-wrapper">
                    <span>
                        <i class="fas fa-key"></i>
                        Permissions
                    </span>
                </div>
            </a>
            <div class="divider divider-link"></div>
            <a href="{{route('langues.index')}}" class="menu-title {{ setActive('admin/langues', 'active') }}">
                <div class="menu-item hoverable valign-wrapper">
                    <span>
                        <i class="fas fa-globe-americas"></i>
                        Langues
                    </span>
                </div>
            </a>
            <div class="divider divider-link"></div>
        </div>
    </div>
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
