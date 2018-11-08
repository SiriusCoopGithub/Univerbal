<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Admin Dashboard</title>


    <!-- Fonts -->
    {{--
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css"> --}}

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">

    <link href="{{ asset('css/libs/materialize/materialize.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Styles -->
    <link href="{{ asset('css/admin-main.css') }}" rel="stylesheet">
    <style>
        /* header, */
        main,
        footer {
            padding-left: 300px;
        }

        #sidenav-1 {
            margin-top: 65px;
        }

        .sub-header {
            margin-left: 15px;
        }

    </style>
</head>
