<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <!-- CSRF Token -->
         <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/img/logo.png')}}">


		<!-- App css -->
		<link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{asset('/assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{asset('/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

        @stack('css-internal')
        @stack('css-external')
    </head>


    <body class="loading">
        <div id="wrapper">
             {{-- Navbar --}}
             <div class="navbar-custom">
                @include('layouts._app-home-pages.navbar-home-page')
            </div>
            <br>
            <br>
            <br>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <br>

                                <div class="card">
                                    <div class="background">
                                    <div class="card-body">
                                         @yield('content')
                                     </div>
                                 </div>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
          </div>

        {{-- <footer class="footer footer-alt">
            2021 - <script>document.write(new Date().getFullYear())</script>
             &copy; Theme by
             <a href="#" class="text-black-50">Poltekkes</a>
        </footer> --}}
    </body>
                <!-- Vendor js -->
                <script src="{{asset('/assets/js/vendor.min.js')}}"></script>

                 <!-- custom dmeo js-->
                 <script src="https://kit.fontawesome.com/b00263187e.js" crossorigin="anonymous"></script>

                <!-- Plugins js-->
                <script src="{{asset('/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

                <!-- Init js-->
                <script src="{{asset('/assets/js/pages/form-wizard.init.js')}}"></script>

                <!-- App js -->
                <script src="{{asset('/assets/js/app.min.js')}}"></script>

    @include('sweetalert::alert')
    @stack('js-external')
    @stack('js-internal')

</html>

