<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <title>Italian Foods</title>
        <link href="{{asset("css/app.css")}}" rel="stylesheet">
        <script src="./js/index.js"></script>
        <link href="{{asset("css/app.css")}}" rel="stylesheet">
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{asset("css/style.css")}}" rel="stylesheet">
        <link href="{{asset("css/reset.css")}}" rel="stylesheet">
        <link href="{{asset("css/bootstrap-grid.css")}}" rel="stylesheet"> --}}
        <link rel="stylesheet" href="./resource/sass/classes.scss">
        <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        
        

        

    </head>
    <body>
        <!--Navbar-->
        @include('include.navbar')
        <!--Body-->
        @yield('content')
        <!--Footer-->
        @include('include.footer')
      
    </body>
</html>
