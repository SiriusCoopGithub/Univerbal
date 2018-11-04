@extends('layouts.html')

@section('body-content')
@include('layouts.partials.navbar-default')

<main class="py-4">
    @yield('content')
</main>

@endsection
