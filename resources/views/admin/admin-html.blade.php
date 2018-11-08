@include('admin._includes.admin-head')

<body>

    <div class="container">
        @include('admin.partials.admin-navbar')</div>
    <div class="row">
        {{-- <div class="col s12">
        </div> --}}
        <div class="col s12 m4 l3">
            @include('admin.partials.admin-sidebar')
        </div>
        <div class="col s12 m8 l9">
            <div class="row">
                @yield('admin-content')
            </div>
        </div>

    </div>

    </div>

    @include('admin._includes.admin-scripts')
</body>

</html>
