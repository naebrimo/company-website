<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="robots" content="index,follow" />
    <meta name="keywords" content="your, tags"/>

    <meta name="description" content="150 words"/>
    <meta name="subject" content="your website's subject">
    <meta name="copyright"content="{{ strtolower(config('app.name')) }}">
    <meta name="language" content="ES">

    <meta name="revised" content="Sunday, July 18th, 2010, 5:15 pm" />
    <meta name="Classification" content="Business">
    <meta name="author" content="name, email@hotmail.com">

    <meta name="designer" content="">
    <meta name="reply-to" content="email@hotmail.com">
    <meta name="owner" content="">
    <meta name="abstract" content="">
    <meta name="topic" content="">
    <meta name="summary" content="">
    <meta name="url" content="http://www.websiteaddrress.com">
    <meta name="identifier-URL" content="http://www.websiteaddress.com">
    <meta name="directory" content="submission">
    <meta name="category" content="">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="application-name" content="{{ strtolower(config('app.name')) }}">
    <title>{{ strtoupper(config('app.name')) }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.png') }}">
</head>
<body data-spy="scroll" data-target="#navbar-nav" data-offset="10">
    <div id="{{ strtolower(config('app.name')) }}">
        <header class="fixed-top">
            @include('__includes/header')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('__includes/footer')
        </footer>
        <a id="goTopBtn" href="#{{ strtolower(config('app.name')) }}">go top</a>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
    <script>$('textarea.ckeditor').ckeditor();</script>
</body>
</html>
