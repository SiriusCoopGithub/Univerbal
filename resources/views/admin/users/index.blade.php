@extends('admin.admin-html')
@section('title', 'Manage Users')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Manage Users</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('users.create')}}" class=" waves-effect waves-light btn-small">Create new</a>
    </div>
</div>
<hr class="col s12 m4 l12">
<table class="highlight col s12 m4 l12">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Organisation</th>
            <th>Tél</th>
            <th>Email</th>
            <th>Actif</th>
            <th>Crée le</th>
            <th>Profile</th>
            <th>Edit</th>
        </tr>
    </thead>
    {{-- {{dd($users)}} --}}
    <tbody>
        @foreach ($users as $user)

        <tr class="hoverable">
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            @foreach ($user->roles as $role)
            <td>{{$role->name}}</td>
            @endforeach
            @foreach ($user->organisations as $orga)
            <td>{{$orga->abbr}}</td>
            @endforeach
            @foreach ($user->profilable as $profile)
            <td>{{$profile->telephone}}</td>
            <td>{{$user->email}}</td>
            @endforeach
            <td>{{$user->active}}</td>

            <td>{{$user->created_at->toFormattedDateString()}}</td>
            <td>
                <a href="{{route('users.show', $user->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">remove_red_eye</i>
                </a>
            </td>
            <td>
                <a href="{{route('users.edit', $user->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">mode_edit</i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
