<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Willam Leong & Co" />
    <meta property="og:description" content="World class lawyers delivered on a lean, technology-enabled platform serving startups, emerging growth companies, and mature enterprises." />
    <meta property="og:url" content="index.html" />
    <meta property="og:site_name" content="Willam Leong & Co" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'William Leong & Co') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('pageStyles')

    <!-- JS -->
    {{-- <script src="{{ asset('js/main.min-2167e62e2b.js') }}"></script> 
    <script src="{{ asset('js/modernizr.min-5231929510.js') }}"></script>  --}}
    
</head>
<body class="home page-template page-template-template-home page-template-template-home-php page page-id-4 full-width custom-background-empty single-author">
    <div class="page-wrapper">

        @include('layouts.navbar')
    
        @yield('content')

        @include('layouts.footer')

    </div>

    <script src="{{ asset('js/compressed.js') }}"></script> 
</body>
</html>
