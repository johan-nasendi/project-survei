<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">

		<!-- App css -->
		<link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{asset('/assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{asset('/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

        {{-- <link href="{{asset('')}}" rel="stylesheet" type="text/css" /> --}}

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

@yield('content')
        <footer class="footer footer-alt">
            2021 - <script>document.write(new Date().getFullYear())</script>
             &copy; J.N theme by
             <a href="" class="text-white-50">CodeKeras</a>
        </footer>

        <!-- Vendor js -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>

    </body>

</html>
