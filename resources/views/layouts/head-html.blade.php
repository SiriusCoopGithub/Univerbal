<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>{{ config('app.name', 'Univerbal') }}</title>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>
