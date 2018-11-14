@extends('admin.admin-html')
@section('title', 'Edit User')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l12">
        <h4 class="left-align">Edit Users</h4>
    </div>

</div>
{{-- {{dd($user['profilable'][0]->genre)}} --}}

<hr class="col s12 m4 l12">
<div id="vue-admin-create-user">
    <form class="col s6 m4 l6" action="{{route('users.update', $user->id)}}" method="POST">
        <div class="col s12 m4 l12">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="input-field col s6 m4 l4">
                    <input name="name" id="name" type="text" class="validate" value="{{ old($user->name) ? old($user->name) : $user->name}}"
                        required>
                    <label for="name">Nom</label>
                </div>
                {!! $errors->first('name', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l4">
                    <input name="first_name" id="first_name" type="text" class="validate" value="{{ old($user['profilable'][0]->first_name) ? old($user['profilable'][0]->first_name) : $user['profilable'][0]->first_name}}">
                    <label for="first_name">Prenom</label>
                </div>
                {!! $errors->first('first_name', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l4">
                    <input name="titre" id="titre" type="text" class="validate" value="{{ old($user->titre) ? old($user->titre) : $user['profilable'][0]->titre}}">
                    <label for="titre">Titre</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="organisation" id="organisation" type="text" class="validate" value="{{ old($user->organisation) ? old($user->organisation) : $user->organisation}}">
                    <label for="organisation">Organisation</label>
                </div>
                {!! $errors->first('organisation', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l6">
                    <input name="langue" id="langue" type="text" class="validate" value="{{ old($user->langue) ? old($user->langue) : $user->langue}}">
                    <label for="langue">Langue</label>
                </div>
                {!! $errors->first('langue', '<div class="invalid">:message</div>') !!}

            </div>

            <div class="row">
                <div class="input-field col s6 m4 l3">
                    <label for="men">
                        <input id="men" name="genre" type="radio" value="{{ old($user->genre) ? old($user->genre) : $user['profilable'][0]->genre }}" />
                        <span>Homme</span>
                    </label>
                </div>

                <div class="input-field col s6 m4 l3">
                    <label for="women">
                        <input id="women" name="genre" value="{{ old($user->genre) ? old($user->genre) : $user['profilable'][0]->genre }}"
                            type="radio" />
                        <span>Femme</span>
                    </label>
                </div>

                @foreach ($allRoles as $role)
                <div class="input-field col s6 m4 l3">
                    <label for="{{$role->name}}">
                        <input id="{{$role->name}}" name="roles[]" type="radio" value="{{ old($role->id) ? old($role->id) : $role->id}}" />
                        <span>{{$role->name}}</span>
                    </label>
                </div>
                @endforeach

            </div>

            <div class="row">
                <div class="input-field col s6 m4 l2">
                    <input name="street_num" id="street_num" type="number" class="validate" value="{{ old($adresse->street_num) ? old($adresse->street_num) : $adresse->street_num}}"
                        min="1">
                    <label for="street_num">Num</label>
                </div>
                {!! $errors->first('street_num', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l2">
                    <input name="box_num" id="box_num" type="number" class="validate" value="{{ old($adresse->box_num) ? old($adresse->box_num) : $adresse->box_num}}"
                        min="1">
                    <label for="box_num">Boite</label>
                </div>
                {!! $errors->first('box_num', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l8">
                    <input name="street_name" id="street_name" type="text" class="validate" value="{{ old($adresse->street_name) ? old($adresse->street_name) : $adresse->street_name}}">
                    <label for="street_name">Rue</label>
                </div>
                {!! $errors->first('street_name', '<div class="invalid">:message</div>') !!}

            </div>

            <div class="row">
                <div class="input-field col s6 m4 l4">
                    <input name="postal_code" id="postal_code" type="number" class="validate" value="{{ old($adresse->postal_code) ? old($adresse->postal_code) : $adresse->postal_code}}">
                    <label for="postal_code">Code Postal</label>
                </div>
                {!! $errors->first('postal_code', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l8">
                    <input name="city_name" id="city_name" type="text" class="validate" value="{{ old($adresse->city_name) ? old($adresse->city_name) : $adresse->city_name}}">
                    <label for="city_name">Ville</label>
                </div>
                {!! $errors->first('city_name', '<div class="invalid">:message</div>') !!}

            </div>

            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="email" id="email" type="email" class="validate" value="{{ old($user->email) ? old($user->email) : $user->email}}">
                    <label for="email">Email</label>
                </div>
                {!! $errors->first('email', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l3">
                    <input name="gsm" id="gsm" type="text" class="validate" value="{{ old($user->gsm) ? old($user->gsm) : $user->gsm}}">
                    <label for="gsm">GSM</label>
                </div>
                {!! $errors->first('gsm', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l3">
                    <input name="telephone" id="telephone" type="text" class="validate" value="{{ old($user['profilable'][0]->telephone) ? old($user['profilable'][0]->telephone) : $user['profilable'][0]->telephone}}">
                    <label for="telephone">Telephone</label>
                </div>
                {!! $errors->first('telephone', '<div class="invalid">:message</div>') !!}
            </div>

            <div class="row">
                <div class="input-field col s12 m4 l6">
                    <input name="password" id="password" type="password" class="validate" minlength="6">
                    <label for="password">Password</label>
                </div>
                {!! $errors->first('password', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l3">
                    <label for="active">
                        <input id="active" name="active" value="{{ old('active') ? old('active') : '1' }}" type="radio"
                            checked />
                        <span>User actif </span>
                    </label>
                </div>
                <div class="input-field col s6 m4 l3">
                    <label for="non-active">
                        <input id="non-active" name="active" value="{{ old('on-active') ? old('on-active') : '0' }}"
                            type="radio" />
                        <span>User non actif </span>
                    </label>
                </div>
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

@endsection

@section('script-create-user-password')
{{-- <script>
    const vueAdminCreateUserPassword = new Vue({
        el: '#vue-admin-create-user',
        data: {
            msg: 'coucou',
            // rolesSelected: "{!! old('roles') ? old('roles') : '' !!}",
        }
    });

</script> --}}
@endsection
