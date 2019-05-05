<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Italian Foods</title>
        <link href="{{asset("css/app.css")}}" rel="stylesheet">
        <script src="./js/index.js"></script>
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
