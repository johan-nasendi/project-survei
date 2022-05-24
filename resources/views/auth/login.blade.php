<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- CSRF Token -->

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/img/logo.png')}}">
		<!-- App css -->
		<link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{asset('/assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{asset('/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading bg-dark authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="#" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{asset('/img/logo.png')}}" alt="logos" height="100">
                                            </span>
                                        </a>

                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{asset('/img/logo.png')}}" alt="logos" height="100">
                                            </span>
                                        </a>
                                    </div>
                                    <h3>Selamat Datang Kembali</h3>
                                    <p class="text-muted mb-4 mt-3">Masukkan alamat email dan kata sandi Anda..</p>
                                </div>

                                <form method="POST" action="{{ route('login') }}" autocomplete="off">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Username</label>
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                                        placeholder="Masukkan Username Anda" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Masukkan Password Anda" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-warning btn-block" type="submit"> Masuk </button>
                                    </div>

                                </form>



                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{asset('/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('/assets/js/app.min.js')}}"></script>

    </body>
</html>
