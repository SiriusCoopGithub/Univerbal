@extends('layouts.html')

@section('container-content')
@include('layouts.partials.index-navbar')
{{-- Début code HTML --}}
<div class="container">

    <div>
        <h1>Web Index page</h1>
    </div>
    <div id="app">
        <example-component></example-component>
    </div>
</div>
{{-- Fin code HTML --}}
@endsection
