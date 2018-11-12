@extends('admin.admin-html')
@section('title', 'Permission Details')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Permission Details</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('permissions.create')}}" class=" waves-effect waves-light btn-small">Create new Permission</a>
    </div>
</div>
<hr class="col s12 m4 l12">


<table class="highlight col s12 m4 l12">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Guard Name</th>
            <th>Créer le</th>
            <th>Edit</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{$permission->id}}</td>
            <td>{{$permission->name}}</td>
            <td>{{$permission->guard_name}}</td>
            <td>{{$permission->created_at->toFormattedDateString()}}</td>
            <td>
                <a href="{{route('roles.edit', $permission->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">mode_edit</i>
                </a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
