@extends('admin.admin-html')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Manage Users</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('users.create')}}" class=" waves-effect waves-light btn-small">Create new user</a>
    </div>
</div>
<hr class="col s12 m4 l12">
<table class="highlight col s12 m4 l12">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Abbr</th>
            <th>Tél</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Crée le</th>
            <th>Profile</th>
            <th>Edit</th>
        </tr>
    </thead>

    <tbody>
        {{-- @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>0475/52.26.22</td>
            <td>Commanditaire</td>
            <td>C.H.U.</td>
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
        @endforeach --}}
    </tbody>
</table>
{{-- <div class=" col s12 m4 l10">
    <ul class="pagination">
        {{$users->links()}}
    </ul>
</div> --}}






@endsection
