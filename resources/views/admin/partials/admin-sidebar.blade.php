<!-- LEFT SIDEBAR	 -->


<div class="sidenav sidenav-fixed">
    <h5 class=" sub-header">GENERAL</h5>
    <ul>
        <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
    </ul>
    <h5 class="sub-header">ADMINISTRATION</h5>
    <ul>
        <li><a href="{{route('users.index')}}">Users</a></li>
        <li><a href="#">Roles</a></li>
        <li><a href="#">Permissions</a></li>
        <li><a href="http://localhost:3000/admin/vue">Teams</a></li>
    </ul>
</div>
