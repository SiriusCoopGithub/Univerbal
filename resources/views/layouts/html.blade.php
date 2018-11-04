@include('layouts._includes.head')

<body>
    {{-- Make vuejs covert the entire body --}}
    {{-- <div id="vue-root"> --}}

        @yield('body-content')

        {{-- </div> --}}

    @include('layouts._includes.scripts')
</body>

</html>
