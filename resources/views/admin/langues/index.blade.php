@extends('admin.admin-html')
@section('title', 'All Langues')
@section('admin-content')

<div class="col s12 m4 l12 valign-wrapper ">
    <div class="col  s12 m4 l10">
        <h4 class="left-align">Manage Langues</h4>
    </div>
    <div class="col s12 m4 l2 right-align ">
        <a href="{{ route('langues.create') }}" class=" waves-effect waves-light btn-small">Create Langues</a>
    </div>
</div>
<hr class="col s12 m4 l12">

<table class="highlight col s12 m4 l6">
    <thead>
        <tr>
            <th>ID</th>
            <th>Active</th>
            <th>Name</th>
            <th>Show</th>
            <th>Edit</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($langues as $langue)
        <tr>
            <td>{{$langue->id}}</td>
            <td>
                <form method="POST" action="langues/actived/{{ $langue->id }}">
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
            {{-- <td>{{$langue->active}}</td> --}}

            <td>
                <a href="{{route('langues.show', $langue->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">remove_red_eye</i>
                </a>
            </td>
            <td>
                <a href="{{route('langues.edit', $langue->id)}}" class="waves-effect waves-light btn-small">
                    <i class="tiny material-icons">mode_edit</i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col s12">
        <button id="submit" class="btn waves-effect waves-light" type="submit">Submit<i class="material-icons right">send</i>
        </button>
    </div>
</div>

@endsection

{{-- @section('script')
<script>
    window.addEventListener("DOMContentLoaded", function() {
        var form = document.getElementById("form-id");

        document.getElementById("your-id").addEventListener("click", function() {
            form.submit();
        });
    });

</script>
@endsection --}}
