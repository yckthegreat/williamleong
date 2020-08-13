<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="type" content="website" />
    <meta name="title" content="Willam Leong & Co" />
    <meta name="description" content="Wlliam Leong & Co. Advocates & Solicitors. Established since 1998." />
    <meta name="url" content="http://wleong.com.my/" />
    <meta name="site_name" content="Willam Leong & Co" />
    <meta name="robots" content="index, follow">

    <link rel="shortcut icon" href="{{ asset("images/favicon.ico") }}" type="image/x-icon">
    <link rel="icon" href="{{ asset("images/favicon.ico") }}" type="image/x-icon">

    {{-- Google --}}
    <meta name="google-site-verification" content="RAfDr3EDQUvkSEQYICnIDMPJS1Y0YaZpSO2hvQT45O8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'William Leong & Co') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Roboto&display=swap" rel="stylesheet">
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
