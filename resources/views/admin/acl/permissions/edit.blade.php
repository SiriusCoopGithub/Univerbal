@extends('admin.admin-html')
@section('title', 'Edit permission')
@section('admin-content')
<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Permission Detail</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{route('permissions.create')}}" class=" waves-effect waves-light btn-small">Create new</a>
    </div>
</div>

<hr class="col s12 m4 l12">


<table class="highlight col s12 m4 l12">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Guard Name</th>
            <th>Créer le</th>
            <th>delete</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{$permission->id}}</td>
            <td>{{$permission->name}}</td>
            <td>{{$permission->guard_name}}</td>
            <td>{{$permission->created_at->toFormattedDateString()}}</td>

            @if($permission->name === 'superadmin')
            <td>
                <button class="btn waves-effect waves-light" type="submit"><i class="tiny material-icons">block</i></button>
            </td>
            @else
            <td>
                <form class="col s6 m4 l6" action="{{route('roles.destroy', $permission->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn waves-effect waves-light" type="submit"><i class="tiny material-icons">delete_forever</i></button>
                </form>
            </td>
            @endif
        </tr>
    </tbody>
</table>
<hr class="col s12 m4 l12">
<div id="vue-admin-create-user">

    <div class="col s12 m4 l12">
        <form class="col s6 m4 l6" action="{{route('permissions.update', $permission->id)}}" method="POST">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="name" id="name" type="text" class="validate" value="{{ old('name') ? old('guard_name') : $permission->name }} "
                        disabled>
                    <label for="name">Name</label>
                </div>
                {!! $errors->first('name', '<div class="invalid">:message</div>') !!}
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
