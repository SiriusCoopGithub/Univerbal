@extends('admin.admin-html')
@section('title', 'Edit Role')
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
            <th>delete</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->display_name}}</td>
            <td>{{$role->description}}</td>
            <td>{{$role->created_at->toFormattedDateString()}}</td>

            @if($role->name === 'superadmin')
            <td>
                <button class="btn waves-effect waves-light" type="submit"><i class="tiny material-icons">block</i></button>
            </td>
            @else
            <td>
                <form class="col s6 m4 l6" action="{{route('roles.destroy', $role->id)}}" method="POST">
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
        <form class="col s6 m4 l6" action="{{route('roles.update', $role->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="display_name" id="display_name" type="text" class="validate" value="{{ old('display_name') ? old('display_name') : $role->display_name }}"
                        required>
                    <label for="display_name">Display Name</label>
                    {!! $errors->first('display_name', '<div class="invalid">:message</div>') !!}
                </div>
            </div>
            @if($role->name === 'superadmin')
            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="name" id="name" type="text" class="validate" value="{{ old('name') ? old('display_name') : $role->name }} "
                        disabled>
                    <label for="name">Name</label>
                </div>
                {!! $errors->first('name', '<div class="invalid">:message</div>') !!}
            </div>
            @else
            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="name" id="name" type="text" class="validate" value="{{ old('name') ? old('display_name') : $role->name }} "
                        required>
                    <label for="name">Name</label>
                </div>
                {!! $errors->first('name', '<div class="invalid">:message</div>') !!}
            </div>
            @endif
            <div class="row">
                <div class="input-field col s12 m4 l6">
                    <input name="description" id="description" type="text" class="validate" value="{{ old('description') ? old('display_name') : $role->description }}">
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

<div class="col s12 m4 l12">
    <form class="col s6 m4 l6" action="{{route('permissions.update', $role->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <table class="highlight col s12 m4 l6">
            <thead>
                <tr>
                    <th>
                        <label for="">
                            <input type="checkbox" />
                            <span></span>
                        </label>
                    </th>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($role->permissions as $permission )

                <tr>
                    <td>
                        <label for="{{$permission->id}}">
                            <input type="checkbox" checked id="{{$permission->id}}" name="{{$permission->id}}" value="{{$permission->id}}" />
                            <span></span>
                        </label>
                    </td>
                    <td>{{$permission->id}}</td>
                    <td>{{$permission->display_name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col s12">
            <button class="btn waves-effect waves-light" type="submit">Submit<i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
@endsection
