@extends('admin.admin-html')
@section('title', 'Permissions')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Manage Permissions</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('users.create')}}" class=" waves-effect waves-light btn-small">Create Permissions</a>
    </div>
</div>
<hr class="col s12 m4 l12">
<table class="highlight col s12 m4 l12">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Description</th>
            <th>Details</th>
            <th>Edit</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($persmissions as $permission)
        <tr>
            <td>{{$permission->id}}</td>
            <td>{{$permission->display_name}}</td>
            <td>{{$permission->name}}</td>
            <td>{{$permission->description}}</td>
            <td>
                <a href="{{route('permissions.show', $permission->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">remove_red_eye</i>
                </a>
            </td>
            <td>
                <a href="{{route('permissions.edit', $permission->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">mode_edit</i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
