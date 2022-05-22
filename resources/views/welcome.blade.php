@extends('layouts._app-home-pages.landing')
@section('title','Poltekkes Jayapura')
@section('content')


{{-- <div class="account-pages mt-5 mb-5">
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
<!-- end page --> --}}

        <!-- Start Content-->


                            <h4 class="header-title mb-3"> Kuesioner Tracer Study (Alumni) </h4>
                            <form>
                                <div id="basicwizard">

                                    <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                        <li class="nav-item">
                                            <a href="#basictab1" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                                <i class="fa-solid fa-a"></i>
                                                <span class="d-none d-sm-inline"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#basictab2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="fa-solid fa-b"></i>
                                                <span class="d-none d-sm-inline"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#basictab3" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="fa-solid fa-c"></i>
                                                <span class="d-none d-sm-inline"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#basictab4" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="fa-solid fa-d"></i>
                                                <span class="d-none d-sm-inline"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#basictab5" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="fa-solid fa-e"></i>
                                                <span class="d-none d-sm-inline"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#basictab6" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                <span class="d-none d-sm-inline">Finish</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content b-0 mb-0 pt-0">
                                        <div class="tab-pane active" id="basictab1">
                                            <h4 class="header-title mb-3"> Account </h4>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="name">Full Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"  name="name" value="" placeholder="Enter full name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="place_of_birth"> Place Of Birth</label>
                                                        <div class="col-md-9">
                                                            <input type="text"  name="place_of_birth" class="form-control" value="" placeholder="Enter place of birth" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="place_of_birth"> Date Of Birth</label>
                                                        <div class="col-md-9">
                                                            <input type="date"  name="date_of_birth" class="form-control" value="" placeholder="Enter date of birth" required>
                                                        </div>
                                                    </div>


                                                </div> <!-- end col -->

                                                <div class="col-6">
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="gender">Gender</label>
                                                        <div class="col-md-9">
                                                            <select name="gender" class="form-control">

                                                                <option selected>Choose</option>
                                                                <option value="Male"> Male</option>
                                                                <option value="Female">Female</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="mobile_phone_number"> Mobile Phone Number</label>
                                                        <div class="col-md-9">
                                                            <input type="number" name="mobile_phone_number" class="form-control" value="" required placeholder="Enter mobile phone number">
                                                            <small class="text-muter"></small>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="email"> E-mail Address </label>
                                                        <div class="col-md-9">
                                                            <input type="email" name="email" class="form-control" value="" required placeholder="Enter email address">
                                                        </div>
                                                    </div>


                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane" id="basictab2">
                                            <h4 class="header-title mb-3"> Experience and Education </h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="name"> First name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="name" name="name" class="form-control" value="Francis">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="surname"> Last name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="surname" name="surname" class="form-control" value="Brinkman">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label" for="email">Email</label>
                                                        <div class="col-md-9">
                                                            <input type="email" id="email" name="email" class="form-control" value="cory1979@hotmail.com">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane" id="basictab3">
                                            <h4 class="header-title mb-3"> Job Experiences </h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                        <h3 class="mt-0">Thank you !</h3>

                                                        <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                            mattis dictum aliquet.</p>

                                                        <div class="mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane" id="basictab4">
                                            <h4 class="header-title mb-3"> Relationship Competence </h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                        <h3 class="mt-0">Thank you !</h3>

                                                        <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                            mattis dictum aliquet.</p>

                                                        <div class="mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane" id="basictab5">
                                            <h4 class="header-title mb-3"> Alumni Comunicacion </h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                        <h3 class="mt-0">Thank you !</h3>

                                                        <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                            mattis dictum aliquet.</p>

                                                        <div class="mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <div class="tab-pane" id="basictab6">
                                            <h4 class="header-title mb-3"> Finish </h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                        <h3 class="mt-0">Thank you !</h3>

                                                        <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                            mattis dictum aliquet.</p>

                                                        <div class="mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </div>

                                        <ul class="list-inline wizard mb-0">
                                            <li class="previous list-inline-item disabled">
                                                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                            </li>
                                            <li class="next list-inline-item float-right">
                                                <a href="javascript: void(0);" class="btn btn-secondary">Next</a>
                                            </li>
                                        </ul>

                                    </div> <!-- tab-content -->
                                </div> <!-- end #basicwizard-->
                            </form>





@stop
