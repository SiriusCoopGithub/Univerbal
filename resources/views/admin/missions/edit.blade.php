@extends('admin.admin-html')
@section('title', 'Edit Organisation')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l12">
        <h4 class="left-align">Edit Organisation</h4>
    </div>

</div>

<hr class="col s12 m4 l12">
<div id="vue-admin-create-user">
    <form class="col s6 m4 l6" action="{{route('organisations.update',  $organisation->id)}}" method="POST">
        <div class="col s12 m4 l12">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="row">
                    <div class="input-field col s6 m4 l8">
                        <input name="name" id="name" type="text" class="validate" value="{{ old($organisation->name) ? old($organisation->name) : $organisation->name}}"
                            required>
                        <label for="name">Nom</label>
                    </div>
                    {!! $errors->first('name', '<div class="invalid">:message</div>') !!}

                    <div class="input-field col s6 m4 l4">
                        <input name="organisation_abbr" id="organisation_abbr" type="text" class="validate" value="{{ old($profile->organisation_abbr) ? old($profile->organisation_abbr) : $profile->organisation_abbr}}">
                        <label for="organisation_abbr">Abbr</label>
                    </div>
                    {!! $errors->first('organisation_abbr', '<div class="invalid">:message</div>') !!}
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
                        <input name="email" id="email" type="email" class="validate" value="{{ old($profile->email) ? old($profile->email) : $profile->email}}">
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
@endsection
