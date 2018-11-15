@extends('admin.admin-html')
@section('title', 'Missions')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Details Missions</h4>
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

        {{-- {{dd($mission->user)}} --}}
        <tr class="hoverable">
            <td>{{$mission->id}}</td>
            <td>{{$mission->date}}</td>
            <td>
                @foreach ($mission->user()->get() as $user)
                <i>{{$user->name}}</i>
                @endforeach
            </td>
            <td>
                @foreach ($mission->langue()->get() as $langue)
                {{-- {{dd($langue)}} --}}
                <i>{{$langue->name}}</i>
                <i>{{$langue->name}}</i>
                @endforeach
            </td>
            <td>{{$mission->statut}}</td>
            <td>{{$mission->interprete_id}}</td>
            <td>
                <a href="{{route('missions.show', $mission->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">remove_red_eye</i>
                </a>
            </td>
            <td>
                <a href="{{route('organisations.edit', $mission->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">mode_edit</i>
                </a>
            </td>
        </tr>

    </tbody>
</table>
@endsection
