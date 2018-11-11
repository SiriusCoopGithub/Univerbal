@extends('admin.admin-html')
@section('title', 'Create Role')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l12">
        <h4 class="left-align">Create Role</h4>
    </div>

</div>

<hr class="col s12 m4 l12">

<div id="vue-admin-create-user">

    <div class="col s12 m4 l12">
        <form class="col s6 m4 l6" action="{{route('roles.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="display_name" id="display_name" type="text" class="validate" value="{{ old('display_name') }}"
                        required>
                    <label for="display_name">Display Name</label>
                    {!! $errors->first('display_name', '<div class="invalid">:message</div>') !!}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="name" id="name" type="text" class="validate" value="{{ old('name') }}" required>
                    <label for="name">Name</label>
                </div>
                {!! $errors->first('name', '<div class="invalid">:message</div>') !!}
            </div>

            <div class="row">
                <div class="input-field col s12 m4 l12">
                    <input name="description" id="description" type="text" class="validate" value="{{ old('description') }}">
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
@endsection
