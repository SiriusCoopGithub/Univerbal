@extends('admin.admin-html')
@section('title', 'All Roles')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Manage Roles</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('roles.create')}}" class=" waves-effect waves-light btn-small">Create new Role</a>
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
            <th>Créer le</th>
            <th>Details</th>
            <th>Edit</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->display_name}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->description}}</td>
            <td>{{$role->created_at->toFormattedDateString()}}</td>
            <td>
                {{-- {{dd($role->id)}} --}}
                <a href="{{route('roles.show', $role->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">remove_red_eye</i>
                </a>
            </td>
            <td>
                <a href="{{route('roles.edit', $role->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">mode_edit</i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
