<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
{{--    <!-- Date Picker -->--}}
{{--    <link rel="stylesheet"--}}
{{--          href="{{asset('admin-lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">--}}
{{--    <!-- Daterange picker -->--}}
{{--    <link rel="stylesheet" href="{{asset('admin-lte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">--}}
{{--    <!-- Bootstrap time Picker -->--}}
{{--    <link rel="stylesheet" href="{{asset('admin-lte/plugins/timepicker/bootstrap-timepicker.min.css')}}">--}}
{{--    <!-- Bootstrap date-time Picker -->--}}
{{--    <link rel="stylesheet" href="{{asset('admin-lte/plugins/datetimepicker/bootstrap-datetimepicker.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('admin-lte/bower_components/select2/dist/css/select2.min.css')}}">--}}
{{--</head>--}}
@include('layouts.admin-lite.includes.def-head')
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                {{ config('app.name', 'Laravel') }}--}}
{{--            </a>--}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>


            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
@include('layouts.admin-lite.scripts.scripts')
</body>
</html>
