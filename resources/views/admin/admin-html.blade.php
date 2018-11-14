@include('admin._includes.admin-head')

<body>
    {{-- <div class="add-button">
        <a href="javascript:void(0)">
            <img src="img/plus-icon.png" alt="plus icon">
        </a>
    </div> --}}

    <main class="main-dashboard">
        @include('admin._partials.admin-navbar')
        </div>

        <div class="main-dashboard-menu">
            @include('admin._partials.admin-sidebar')
        </div>
    </main>


    <div class="container-class1">
        <div class="container">
            <div class="row">
                @yield('admin-content')
            </div>

        </div>

    </div>


    @include('admin._includes.admin-scripts')
    @yield('script')
</body>

</html>
