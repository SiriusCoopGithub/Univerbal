@extends('admin.admin-html')
@section('title', 'Edit Langue')
@section('admin-content')
<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align"></h4>Langue Detail</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('langues.create')}}" class=" waves-effect waves-light btn-small"></a>
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
        </tr>
    </thead>

    <tbody>
    <tbody>
        <tr>
            <td>{{$langue->id}}</td>
            <td>
                <form method="POST" action="{{route('langues.actived', $langue->id)}}">
                    @method('PATCH')
                    @csrf
                    <label for="{{$langue->name}}">
                        <input id="{{$langue->name}}" name="active" type="checkbox" value="{{ old($langue->id) ? old($langue->id) : $langue->id}}"
                            onChange="this.form.submit()" {{ $langue->active ? 'checked' : ''}} />
                        <span></span>
                    </label>
                </form>
            </td>
            <td>{{$langue->name}}</td>
            <td>{{$langue->abbr}}</td>
            <td>{{$langue->dialect}}</td>
            <td>{{$langue->country}}</td>
            <td>{{$langue->description}}</td>
            <td>{{$langue->created_at->toFormattedDateString()}}</td>
        </tr>
    </tbody>
</table>
<hr class="col s12 m4 l12">
<div id="vue-admin-edit-langue">

    <div class="col s12 m4 l12">
        <form class="col s6 m4 l12" action="{{route('langues.update', $langue->id)}}" method="POST">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="name" id="name" type="text" class="validate" value="{{ old($langue->name) ? old($langue->name) : $langue->name }}"
                        required>
                    <label for="name">Name</label>
                </div>
                {!! $errors->first('name', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l6">
                    <input name="abbr" id="abbr" type="text" class="validate" value="{{ old($langue->abbr) ? old($langue->abbr) : $langue->abbr }}"
                        required>
                    <label for="abbr">Abbr</label>
                </div>
                {!! $errors->first('abbr', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l6">
                    <input name="dialect" id="dialect" type="text" class="validate" value="{{ old($langue->dialect) ? old($langue->dialect) : $langue->dialect }}">
                    <label for="dialect">Dialect</label>
                </div>
                {!! $errors->first('dialect', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l6">
                    <input name="country" id="country" type="text" class="validate" value="{{ old('country') ? old('country') : $langue->country }}">
                    <label for="country">Country</label>
                </div>
                {!! $errors->first('country', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l6">
                    <input name="description" id="description" type="text" class="validate" value="{{ old('description') ? old('description') : $langue->description }}">
                    <label for="description">Description</label>
                </div>
                {!! $errors->first('description', '<div class="invalid">:message</div>') !!}
            </div>


            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit">Submit<i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<hr class="col s12 m4 l12">
@endsection
