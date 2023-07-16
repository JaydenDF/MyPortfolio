<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jayden Fokkink</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="icon" type="image/x-icon" sizes="1500x1624" href="{{asset('images/galaxy_logo.png')}}">

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="antialiased text-gray-800 dark:text-gray-200">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
    <x-layout.navbar/>
    {{$slot}}
    <x-layout.footer/>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
