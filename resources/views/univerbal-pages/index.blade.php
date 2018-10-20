@extends('layouts.head-html')

@section('content')
<div>
    <h1>index page</h1>
</div>
<div class="flex-center position-ref full-height">

    {{-- Try the example component from vue.js --}}
    <div class="content" id="app">
        <example-component></example-component>
    </div>
</div>
@endsection
