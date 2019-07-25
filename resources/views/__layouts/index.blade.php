<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ strtoupper(config('app.name')) }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.png') }}">
</head>
<body data-spy="scroll" data-target="#navbar-nav" data-offset="0">
    <div id="{{ strtolower(config('app.name')) }}">
        @include('__includes/header')
        <main>@yield('content')</main>
        @include('__includes/footer')
    </div>
    <a id="goTopBtn" href="#{{ strtolower(config('app.name')) }}">go top</a>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
