@include('admin._includes.admin-head')

<body>
    {{-- <div class="add-button">
        <a href="javascript:void(0)">
            <img src="img/plus-icon.png" alt="plus icon">
        </a>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col s12 m4 l12">
                @include('admin._partials.admin-navbar')
            </div>

            <div class="col s3 m4 l2">
                @include('admin._partials.admin-sidebar')
            </div>

            <div class="col s9 m8 l10">
                @yield('admin-content')
            </div>

        </div>
    </div>

    @include('admin._includes.admin-scripts')
    @yield('script')
</body>

</html>
