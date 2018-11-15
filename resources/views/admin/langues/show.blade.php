@extends('admin.admin-html')
@section('title', 'Langue Detail')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Langue Detail</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('langues.create')}}" class=" waves-effect waves-light btn-small">Create new</a>
    </div>
</div>
<hr class="col s12 m4 l12">


<table class="highlight col s12 m4 l12">
    <thead>
        <tr>
            <th>ID</th>
            <th>active</th>
            <th>Name</th>
            <th>Abbr</th>
            <th>Dialect</th>
            <th>Country</th>
            <th>Description</th>
            <th>Créer le</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{$langue->id}}</td>
            <td>
                <form method="POST" action="{{route('langues.actived', $langue->id)}}">
                    @method('PATCH')
                    @csrf
                    <label for="{{$langue->langue_name}}">
                        <input id="{{$langue->langue_name}}" name="active" type="checkbox" value="{{ old($langue->id) ? old($langue->id) : $langue->id}}"
                            onChange="this.form.submit()" {{ $langue->active ? 'checked' : ''}} />
                        <span></span>
                    </label>
                </form>
            </td>
            <td>{{$langue->langue_name}}</td>
            <td>{{$langue->abbr_langue}}</td>
            <td>{{$langue->dialect}}</td>
            <td>{{$langue->country}}</td>
            <td>{{$langue->description}}</td>
            <td>{{$langue->created_at->toFormattedDateString()}}</td>
            <td>
                <a href="{{route('langues.edit', $langue->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">mode_edit</i>
                </a>
            </td>
            <td>
                <a href="{{route('langues.destroy', $langue->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">delete_forever</i>
                </a>
            </td>
        </tr>
    </tbody>
</table>




@endsection
