@extends('admin.admin-html')
@section('title', 'Create Langue')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l12">
        <h4 class="left-align">Create Langue</h4>
    </div>

</div>

<hr class="col s12 m4 l12">

<div id="vue-admin-create-langue">
    <div class="col s12 m4 l12">
        <form class="col s6 m4 l12" action="{{route('langues.store')}}" method="POST">
            @csrf

            <div class="row">
                <div class="input-field col s6 m4 l6">
                    <input name="langue_name" id="langue_name" type="text" class="validate" value="{{ old('langue_name') }}"
                        required>
                    <label for="langue_name">Name</label>
                </div>
                {!! $errors->first('langue_name', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l6">
                    <input name="abbr_langue" id="abbr_langue" type="text" class="validate" value="{{ old('abbr_langue') }}"
                        required>
                    <label for="abbr_langue">Abbr</label>
                </div>
                {!! $errors->first('abbr_langue', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l6">
                    <input name="dialect" id="dialect" type="text" class="validate" value="{{ old('dialect')}}">
                    <label for="dialect">Dialect</label>
                </div>
                {!! $errors->first('dialect', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l6">
                    <input name="country" id="country" type="text" class="validate" value="{{ old('country') }}">
                    <label for="dialect">Country</label>
                </div>
                {!! $errors->first('country', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l6">
                    <input name="description" id="description" type="text" class="validate" value="{{ old('description') }}">
                    <label for="description">Description</label>
                </div>
                {!! $errors->first('description', '<div class="invalid">:message</div>') !!}

                <div class="input-field col s6 m4 l6">
                    <label for="active">
                        <input id="active" name="active" type="checkbox" value="{{ old('active')}}" checked />
                        <span>Active</span>
                    </label>
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
