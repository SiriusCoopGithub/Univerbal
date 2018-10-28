@extends('layouts.html')
@include('layouts.partials.navbar')
@section('container-content')
{{-- Début code HTML --}}

<div class="container">

    <div>
        <h1>Index page</h1>
    </div>
    <div id="app">
        <example-component></example-component>
    </div>
</div>
{{-- Fin code HTML --}}
@endsection
