@extends('admin.admin-html')
@section('title', 'Edit User')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l12">
        <h4 class="left-align">Edit Users</h4>
    </div>

</div>
{{-- {{dd(is_null($profile->genre))}} --}}

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
                    <input name="first_name" id="first_name" type="text" class="validate" value="{{ old($profile->first_name) ? old($profile->first_name) : $profile->first_name}}">
                    <label for="first_name">Prenom</label>
                </div>
                {!! $errors->first('first_name', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l4">
                    <input name="titre" id="titre" type="text" class="validate" value="{{ old($user->titre) ? old($user->titre) : $profile->titre}}">
                    <label for="titre">Titre</label>
                </div>
            </div>

            <div class="row">

                <div class="input-field col s6 m4 l6">
                    <select name="organisation">
                        <option></option>
                        @foreach ($organisations as $organisation)
                        <option value="{{$organisation->id}}">{{$organisation->name}}</option>
                        @endforeach
                    </select>
                    <label for="organisation">Organisation</label>
                </div>
                {{--
                {!! $errors->first('organisation', '<div class="invalid">:message</div>') !!}
                {!! $errors->first('langue', '<div class="invalid">:message</div>') !!} --}}

                <div class="input-field col s6 m4 l6">
                    <select name="langue">
                        <option></option>
                        @foreach ($langues as $langue)
                        <option value="{{$langue->id}}">{{$langue->name}}</option>
                        @endforeach
                    </select>
                    <label for="langue">langue</label>
                </div>

            </div>

            <div class="row">
                <div class="input-field col s6 m4 l3">
                    <label for="men">
                        <input id="men" name="genre" type="radio" value="{{ old($profile->genre) ? old($profile->genre) : $profile->genre }}"
                            {{$profile->genre === 'h' ? 'checked' : '' }} />
                        <span>Homme</span>
                    </label>
                </div>

                <div class="input-field col s6 m4 l3">
                    <label for="women">
                        <input id="women" name="genre" type="radio" value="{{ old($profile->genre) ? old($profile->genre) : $profile->genre }}"
                            {{$profile->genre === 'f' ? 'checked' : '' }} />
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
                    <input name="gsm" id="gsm" type="text" class="validate" value="{{ old($profile->gsm) ? old($profile->gsm) : $profile->gsm}}">
                    <label for="gsm">GSM</label>
                </div>
                {!! $errors->first('gsm', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l3">
                    <input name="telephone" id="telephone" type="text" class="validate" value="{{ old($profile->telephone) ? old($profile->telephone) : $profile->telephone}}">
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

@section('script')
<script>
    // console.log('TEstfsqfqsf');

    // var select = document.querySelectorAll('select');
    // var instances = M.FormSelect.init(select, {});
    // var instance = M.FormSelect.getInstance(instances);

    // instance.getSelectedValues();

    // console.log('instance : ', instance);

</script>
@endsection
