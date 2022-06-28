<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">

    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Poltekes Jayapura" />
    <meta property="og:description" content="Poltekes Jayapura - tracerstudy" />
    <meta property="og:url" content="https://tracerstudy.poltekkesjayapura.ac.id" />
    <meta property="og:site_name" content="Poltekes Jayapura" />
    <meta property="og:image" content="https://tracerstudy.poltekkesjayapura.ac.id/img/logo.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('/img/logo.png')}}" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('/vendor/assets/css/styles.css')}}">

    @stack('css-internal')
    @stack('css-external')
</head>


<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        @include('layouts._app-home-pages.navbar-home-page')
    </header>

    <main class="main">
        @yield('content')
    </main>



    <!--=============== SCROLL REVEAL ===============-->
    <script src="{{asset('/vendor/assets/js/scrollreveal.min.js')}}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{asset('/vendor/assets/js/main.js')}}"></script>
</body>
@include('sweetalert::alert')
@stack('js-external')
@stack('js-internal')

</html>
