@include('admin._includes.admin-head')

<body>
    {{-- <div class="add-button">
        <a href="javascript:void(0)">
            <img src="img/plus-icon.png" alt="plus icon">
        </a>
    </div> --}}

    <div class="container">
        @include('admin._partials.admin-navbar')
    </div>


    <div class="row">
        {{-- <div class="col s12">
        </div> --}}
        <div class="col s12 m4 l3">
            @include('admin._partials.admin-sidebar')
        </div>
        <div class="col s12 m8 l9">
            <div class="row">

                @yield('admin-content')
            </div>
        </div>
    </div>

    @include('admin._includes.admin-scripts')
    @yield('script-create-user-password')
</body>

</html>
