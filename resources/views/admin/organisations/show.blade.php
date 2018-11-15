@extends('admin.admin-html')
@section('title', 'Manage Organisations')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Manage Organisations</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('organisations.create')}}" class=" waves-effect waves-light btn-small">Create new Organisation</a>
    </div>
</div>
<hr class="col s12 m4 l12">
<table class="highlight col s12 m4 l12">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Abbr</th>
            <th>Email</th>
            <th>Tél</th>
            <th>Contact</th>
            <th>Profile</th>
            <th>Edit</th>
        </tr>
    </thead>

    <tbody>
        <tr class="hoverable">
            <td>{{$organisation->id}}</td>
            <td>{{$organisation->name}}</td>
            <td>{{$organisation->organisation_abbr}}</td>
            <td>{{$organisation->email}}</td>
            <td>{{$organisation->telephone}}</td>
            <td>{{$organisation->contact_id}}</td>
            <td>
                <a href="{{route('organisations.show', $organisation->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">remove_red_eye</i>
                </a>
            </td>
            <td>
                <a href="{{route('organisations.edit', $organisation->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">mode_edit</i>
                </a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
