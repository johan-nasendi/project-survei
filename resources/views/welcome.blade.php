@extends('layouts._app-home-pages.landing')
@section('title','Poltekkes Jayapura')
@section('content')

@push('css-internal')
    <!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;800&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{('/vendor/landing/css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{('/vendor/landing/css/materialdesignicons.min.css')}}" />

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="{{('/vendor/landing/css/style.css')}}" />

@endpush



<section class="bg-home bg-gradient" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home-title mo-mb-20">
                            <h1 class="mb-4 text-dark">PEDOMAN PELAKSANAAN TRACER STUDY POLTEKKES KEMENKES</h1>
                            <div class="subscribe">
                                <form>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="mb-2">
                                                <a href="{{route('forum')}}" class="btn btn-warning text-dark">
                                                    <b>MULAI KUESIONER</b> <i class="fa fa-paper-plane text-dark"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                        <div class="home-img position-relative">
                            <img src="{{asset('/img/logo.png')}}" alt="" class="home-first-img">
                            <img src="{{asset('/img/logo.png')}}" alt="" class="home-second-img mx-auto d-block">
                            <img src="{{asset('/img/logo.png')}}" alt="" class="home-third-img">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</section>


@stop
@push('js-internal')

<script src="{{('/vendor/landing/js/jquery.min.js')}}"></script>
<script src="{{('/vendor/landing/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{('/vendor/landing/js/jquery.easing.min.js')}}"></script>
<script src="{{('/vendor/landing/js/scrollspy.min.js')}}"></script>

<!-- custom js -->
<script src="{{('/vendor/landing/js/app.js')}}"></script>

@endpush


