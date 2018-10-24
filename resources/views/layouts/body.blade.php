<body>
  <div class="container">
      @yield('content')
  </div>
  <script src="{{ asset('/js/app.js') }}"></script>
</body>

@section('content')
{{-- Début code HTML --}}
<div>
  <h1>Interprète page</h1>
</div>

{{-- Fin code HTML --}}
@endsection
