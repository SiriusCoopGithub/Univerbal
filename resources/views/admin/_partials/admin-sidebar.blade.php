<!-- LEFT SIDEBAR	 -->


<div class="sidenav sidenav-fixed">
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
        <li><a href="{{ route('admin.index') }}">Intervenants</a></li>
    </ul>
    {{-- @role('superadmin')
    <h5 class="sub-header">ADMINISTRATION</h5>
    <ul>
        <li><a href="{{route('roles.index')}}">Roles</a></li>
        <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        <li><a href="{{route('teams.index')}}">Teams</a></li>
    </ul>
    @endrole --}}
</div>
