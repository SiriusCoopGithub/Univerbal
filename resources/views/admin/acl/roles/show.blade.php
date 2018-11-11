@extends('admin.admin-html')
@section('title', 'Roles Details')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Roles Details</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('users.create')}}" class=" waves-effect waves-light btn-small">Create new Roles</a>
    </div>
</div>
<hr class="col s12 m4 l12">


<table class="highlight col s12 m4 l12">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Display Name</th>
            <th>Description</th>
            <th>Créer le</th>
            <th>Edit</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->display_name}}</td>
            <td>{{$role->description}}</td>
            <td>{{$role->created_at->toFormattedDateString()}}</td>
            <td>
                <a href="{{route('roles.edit', $role->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">mode_edit</i>
                </a>
            </td>
        </tr>
    </tbody>
</table>




@endsection
