@include('app._includes.app-head')

<body>
    {{-- Make vuejs covert the entire body --}}
    <div id="vue-app">

        @yield('app-content')
        @include('app._partials.app-navbar')
    </div>

    @include('app._includes.app-scripts')
</body>

</html>
