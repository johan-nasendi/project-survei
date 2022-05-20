@extends('layouts._app-home-pages.landing')
@section('title','Welcome')
@section('content')


<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="error-ghost text-center">
                           <img src="{{asset('img/welcome.png')}}" alt="welcome" style="width: 100%">
                        </div>

                        <div class="text-justify">
                            <h3 class=" text-center mt-4"> Welcome </h3>
                            <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.
                                It has survived not only five centuries</p>
                        </div>

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



@stop
