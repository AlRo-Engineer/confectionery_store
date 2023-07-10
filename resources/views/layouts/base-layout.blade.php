<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<!-- Head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('resources/images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('resources/images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('resources/images/logo.png')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    @vite(['resources/css/app.scss'])
    @yield('css')
    @stack('scripts_data')

    <title>Confectionery Store</title>

</head>
<body>

    @include('partials.header')
    @yield('content')
    @include('partials.footer')

@vite('resources/js/app.js')
@yield('js')

</body>
</html>
