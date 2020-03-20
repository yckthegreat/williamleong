<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Wolo Space">
    <meta name="author" content="yck">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wolo Space</title>
    <!-- Icons-->
    <link href="{{ asset('assets/backoffice/css/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backoffice/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backoffice/css/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/backoffice/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backoffice/css/pace.min.css') }}" rel="stylesheet">
    
    <!-- Dropzone JS -->
    <link href="{{ asset('assets/backoffice/css/dropzone.css') }}" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('assets/backoffice/css/custom.css') }}" rel="stylesheet">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('assets/images/new-favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/new-favicon.png') }}">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	
	@include('backoffice.layouts.header-nav')

    <div class="app-body">
		
		@include('backoffice.layouts.sidebar')
		
		<main class="main">
            <div class="container-fluid">
                @yield('content')
            </div>
		</main>
    </div>

    @include('backoffice.layouts.footer')
    
    @yield('styles')

    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('assets/backoffice/js/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/js/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/js/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/js/pace-progress/pace.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/js/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/backoffice/js/@coreui/coreui/dist/js/coreui.min.js') }}"></script>
    
    <!-- Dropzone JS -->
    <script src="{{ asset('assets/backoffice/js/dropzone.js') }}"></script>

    @yield('script')

</body>
</html>
