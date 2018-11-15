@extends('admin.admin-html')
@section('title', 'All Missions')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Toutes les missions</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('missions.create')}}" class=" waves-effect waves-light btn-small">Create new</a>
    </div>
</div>
<hr class="col s12 m4 l12">
<table class="highlight col s12 m4 l12">
    <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Commanditaire</th>
            <th>Langue</th>
            <th>Statut</th>
            <th>Interprete</th>
            <th>Details</th>
            <th>Edit</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($missions as $missions)

        <tr class="hoverable">
            <td>{{$missions->id}}</td>
            <td>{{$missions->date}}</td>
            <td>{{$langue->name}}</td>
            <td>{{$missions->statut}}</td>
            <td>{{$missions->interprete_id}}</td>
            <td>
                <a href="{{route('missions.show', $missions->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">remove_red_eye</i>
                </a>
            </td>
            <td>
                <a href="{{route('organisations.edit', $missions->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">mode_edit</i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
