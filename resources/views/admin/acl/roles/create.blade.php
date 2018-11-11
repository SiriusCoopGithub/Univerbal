@extends('admin.admin-html')
@section('title', 'Create Roles')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l12">
        <h4 class="left-align">Create Users</h4>
    </div>

</div>
{{-- {{dd(route('users.store'))}} --}}
<hr class="col s12 m4 l12">
<div id="vue-admin-create-user">

    <div class="col s12 m4 l12">
        <form class="col s6 m4 l6" action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="name" id="name" type="text" class="validate" value="{{ old('name') }}" required>
                    <label for="name">Name</label>
                </div>
                {!! $errors->first('name', '<div class="invalid">:message</div>') !!}
            </div>

            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="email" id="email" type="email" class="validate" value="{{ old('email') }}" required>
                    <label for="email">Email</label>
                </div>
            </div>
            {!! $errors->first('email', '<div class="invalid">:message</div>') !!}

            <div class="row">
                <div class="input-field col s12 m4 l12">
                    <input name="password" id="password" type="password" class="validate" minlength="6" required>
                    <label for="password">Password</label>
                </div>
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

@section('script-create-user-password')
<script>
    const vueAdminCreateUserPassword = new Vue({
        el: '#vue-admin-create-user',
        data: {
            msg: 'coucou',
            // rolesSelected: "{!! old('roles') ? old('roles') : '' !!}",
        }
    });

</script>
@endsection

{{-- <div class="row">
    <div class="input-field col s6 m4 l6">
        <p>
            <label for="commanditaire">
                <input id="commanditaire" name="usertype" value="commanditaire" type="radio" />
                <span>Commanditaire</span>
            </label>
        </p>
    </div>
    <div class="input-field col s6 m4 l6">
        <p>
            <label for="interprete">
                <input id="interprete" name="usertype" value="interprete" type="radio" />
                <span>Interprete</span>
            </label>
        </p>
    </div>
</div>
{!! $errors->first('usertype', '<div class="invalid">:message</div>') !!} --}}
{{-- @foreach ($roles as $role)
<div class="input-field col s12 m4 l12">

    <label>
        <input type="checkbox" :native-value="{{$role->id}}" />
        <span>{{$role->display_name}}</span>
    </label>

</div>
@endforeach --}}
