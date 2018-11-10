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

{{-- @php dd($users); @endphp --}}
<table class="highlight col s12 m4 l12">
    <thead>
        <tr>
            <th>Champ</th>
            <th>Valeur</th>
        </tr>
    </thead>

    <tbody>
        {{-- @foreach ($users as $user) --}}
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->type}}</td>
            <td>{{$user->created_at}}</td>
        </tr>
        {{-- @endforeach --}}

        {{-- <td>{{$user->email}}</td>
        <td>0475/52.26.22</td>
        <td>{{$user->type}}</td>
        <td>C.H.U.</td>
        <td>{{$user->created_at->toFormattedDateString()}}</td>
        <td>{{$user->type}}</td>
        <td>
            <a href="{{route('users.edit', $user->id)}}" class="waves-effect waves-light btn-small">
                <i class="tiny material-icons">mode_edit</i>
            </a>
        </td>
        </tr> --}}

    </tbody>
</table>
{{-- <div class=" col s12 m4 l10">
    <ul class="pagination">
        {{$users->links()}}
    </ul>
</div> --}}






@endsection
