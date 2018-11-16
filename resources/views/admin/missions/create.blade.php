@extends('admin.admin-html')
@section('title', 'Create Mission')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l12">
        <h4 class="left-align">Create Mission</h4>
    </div>

</div>
{{-- {{dd(route('users.store'))}} --}}
<hr class="col s12 m4 l12">
<div id="vue-admin-create-user">
    <form class="col s6 m4 l12" action="{{route('missions.store')}}" method="POST">
        <div class="col s12 m4 l12">
            @csrf
            {{-- {{dd($commanditaires)}} --}}
            <div class="row">

                <div class="row">
                    <div class="input-field col s6 m4 l6">
                        <select name="langue1">
                            <option value="#">Choix de la premiere langue</option>
                            @foreach ($langues as $langue)
                            <option value="{{$langue->id}}">{{$langue->name}}</option>
                            @endforeach
                        </select>
                        <label for="organisation">Langue 1</label>
                    </div>
                    <div class="input-field col s6 m4 l6">
                        <select name="langue2">
                            <option value="#">Choix de la deuxième langue</option>
                            @foreach ($langues as $langue)
                            <option value="{{$langue->id}}">{{$langue->name}}</option>
                            @endforeach
                        </select>
                        <label for="organisation">Langue 2</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6 m4 l4">
                        <label for="men">
                            <input id="men" name="genre" type="radio" value="{{ old('genre') ? old('genre') : 'h' }}"
                                required />
                            <span>Homme</span>
                        </label>
                    </div>

                    <div class="input-field col s6 m4 l4">
                        <label for="women">
                            <input id="women" name="genre" value="{{ old('genre') ? old('genre') : 'f' }}" type="radio" />
                            <span>Femme</span>
                        </label>
                    </div>

                    <div class="input-field col s6 m4 l4">
                        <label for="na">
                            <input id="na" name="genre" value="{{ old('genre') ? old('genre') : 'na' }}" type="radio" />
                            <span>Pas d'importance</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m4 l12">
                        <div class="col s6 m4 l3">
                            <label for="date">Date</label>
                            <input id="date" type="text" class="datepicker" required />
                            <input type="hidden" id="datetime" name="datetime" value="">
                        </div>
                        <div class="col s6 m4 l3">
                            <label for="hours">Heure</label>
                            <input id="hours" type="text" class="timepicker" required />
                            <input type="hidden" id="hourstime" name="hourstime" value="">
                        </div>

                        <div class="input-field col s6 m4 l5">
                            <input name="estimed_time" id="estimed_time" type="number" class="validate" min="1" max="8"
                                value="{{ old('estimed_time') }}">
                            <label for="estimed_time">Temps estimé</label>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s6 m4 l6">
                        <select name="langue2">
                            <option value="#">Organisation</option>
                            @foreach ($organisations as $organisation)
                            <option value="{{$organisation->id}}">{{$organisation->name}}</option>
                            @endforeach
                        </select>
                        <label for="organisation">Organisation</label>
                    </div>

                    <div class="input-field col s6 m4 l6">
                        <select name="users">
                            <option></option>
                            @foreach ($commanditaires as $commanditaire)
                            <option value="{{$commanditaire->id}}">{{$commanditaire->name}}</option>
                            @endforeach
                        </select>
                        <label for="users">Nom de l'intervenant</label>
                    </div>

                    <div class="input-field col s6 m4 l6">
                        <select name="interprete_id">
                            <option></option>
                            @foreach ($interpretes as $interprete)
                            <option value="{{$interprete->id}}">{{$interprete->name}}</option>
                            @endforeach
                        </select>
                        <label for="users">Nom de l'interprète</label>
                    </div>

                    <div class="input-field col s6 m4 l4">
                        <input name="beneficiaire" id="beneficiaire" type="text" class="validate" value="{{ old('beneficiaire') }}">
                        <label for="beneficiaire">Nom du bénéficiaire</label>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s6 m4 l2">
                        <input name="street_num" id="street_num" type="number" class="validate" value="{{ old('street_num') }}"
                            min="1">
                        <label for="street_num">Num</label>
                    </div>
                    {!! $errors->first('street_num', '<div class="invalid">:message</div>') !!}

                    <div class="input-field col s6 m4 l2">
                        <input name="box_num" id="box_num" type="number" class="validate" value="{{ old('box_num') }}"
                            min="1">
                        <label for="box_num">Boite</label>
                    </div>
                    {!! $errors->first('box_num', '<div class="invalid">:message</div>') !!}

                    <div class="input-field col s6 m4 l8">
                        <input name="street_name" id="street_name" type="text" class="validate" value="{{ old('street_name') }}">
                        <label for="street_name">Rue</label>
                    </div>
                    {!! $errors->first('street_name', '<div class="invalid">:message</div>') !!}
                </div>

                <div class="row">
                    <div class="input-field col s6 m4 l4">
                        <input name="postal_code" id="postal_code" type="number" class="validate" value="{{ old('postal_code') }}">
                        <label for="postal_code">Code Postal</label>
                    </div>
                    {!! $errors->first('postal_code', '<div class="invalid">:message</div>') !!}

                    <div class="input-field col s6 m4 l8">
                        <input name="city_name" id="city_name" type="text" class="validate" value="{{ old('city_name') }}">
                        <label for="city_name">Ville</label>
                    </div>
                    {!! $errors->first('city_name', '<div class="invalid">:message</div>') !!}

                </div>

                <div class="row">
                    <div class="input-field col s6 m4 l6">
                        <input name="objet" id="objet" type="text" class="validate" value="{{ old('objet') }}">
                        <label for="objet">Objet de la prestation</label>
                    </div>
                    {!! $errors->first('email', '<div class="invalid">:message</div>') !!}

                    <div class="input-field col s6 m4 l6">
                        <textarea name="note_interp" id="note_interp" type="textarea" class="materialize-textarea"
                            value="{{ old('note_interp') }}"></textarea>
                        <label for="telephone">Note à l'interprète</label>
                    </div>
                    {!! $errors->first('telephone', '<div class="invalid">:message</div>') !!}

                    <div class="input-field col s6 m4 l6">
                        <textarea name="note_perso" id="note_perso" type="textarea" class="materialize-textarea" value="{{ old('note_perso') }}"></textarea>
                        <label for="note_perso">Note personnelle</label>
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

<script>
    var datePicker = document.querySelectorAll('.datepicker');
    // var value = datePicker.toString();
    var dateInstances = M.Datepicker.init(datePicker, {
        firstDay: 1,
        format: 'dd mmm yyyy',
        showClearBtn: true,
        i18n: {
            months: [
                'Janvier',
                'Février',
                'Mars',
                'Avril',
                'Mai',
                'Juin',
                'Juillet',
                'Août',
                'Septembre',
                'Octobre',
                'Novembre',
                'Decembre'
            ],
            monthsShort: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'Mai',
                'Juin',
                'Jul',
                'Août',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            weekdays: [
                'Dimanche',
                'Lundi',
                'Mardi',
                'Mercredi',
                'Jeudi',
                'Vendredi',
                'Samedi'
            ],
            weekdaysShort: [
                'Dim',
                'Lun',
                'Mar',
                'Mer',
                'Jeu',
                'Ven',
                'Sam'
            ],
            weekdaysAbbrev: ['D', 'L', 'M', 'M', 'J', 'V', 'S']
        }
    });

    var instance = M.Datepicker.getInstance(dateInstances);


    var hourPicker = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(hourPicker, {
        defaultTime: 'now',
        twelveHour: false,
        showClearBtn: true,
    });

    document.getElementById("hours").addEventListener("change", catchTime);
    document.getElementById("date").addEventListener("change", catchTime);

    function catchTime(e) {
        e.preventDefault;

        var hours = document.getElementById("hours");
        var date = document.getElementById("date");

        hourstime.value = hours.value;
        datetime.value = date.value;
        // console.log('hoursValue : ', hoursValue);
        // console.log('hoursValue : ', hoursValue);

        // hourstime.value = hoursValue;
        // hourstime.value = hoursValue;
    }

</script>
@endsection
