@extends('layouts.app-dashboard')

@section('title')
 Detail Respondent
@endsection
@section('content')

<!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{route('respondent-identity.index')}}">Respondent Identity</a></li>
                                            <li class="breadcrumb-item active">@yield('title') </li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-12">
                                    <!-- start card -->
                                    <div class="card">
                                    <!-- start card header -->
                                    <div class="card-header bg-primary">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4 class="text-light"><i class="fas fa-calendar mr-1"></i>Form @yield('title')</h4>
                                            </div><!-- end col-->
                                            <div class="col-lg-4">
                                                <div class="text-lg-right">
                                                    <a href="{{ route('respondent-identity.index') }}" class="btn btn-sm btn-dark"><div class="fas fa-reply"></div></a>
                                                </div>
                                            </div><!-- end col-->
                                        </div> <!-- end row -->
                                    </div>
                                    <!-- end card header -->

                                        <!-- start card-body -->
                                        <div class="card-body">
                                            <form method="POST" action="#">
                                                @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Fist Name</label>
                                                    <input  type="text" class="form-control @error('fist_name') is-invalid @enderror"
                                                    name="fist_name" value="{{ old('fist_name') }}" required autocomplete="fist_name"
                                                    autofocus placeholder="Fist Name">
                                                    @error('fist_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Last Name</label>
                                                    <input  type="text" class="form-control @error('last_name') is-invalid @enderror"
                                                    name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"
                                                    autofocus placeholder="Last Name">
                                                    @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                        <label for="inputEmail4" class="col-form-label">Password</label>
                                                        <input  type="password" class="form-control @error('password') is-invalid @enderror"
                                                        name="password" value="{{ old('password') }}" required autocomplete="password"
                                                        autofocus placeholder="New Password">
                                                        <div class="input-group-append" data-password="false">
                                                            <div class="input-group-text">
                                                                <span class="password-eye"></span>
                                                            </div>
                                                        </div>

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Confirm Passoword</label>
                                                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Passwd"
                                                    name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Email</label>
                                                    <input  type="email" class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                                    autofocus placeholder="Email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="input_category_thumbnail" class="font-weight-bold">
                                                        Photo
                                                    </label>
                                                    <div class="input-group ">
                                                        <div class="input-group-prepend">
                                                            <button id="button_category_thumbnail" data-input="input_category_thumbnail"
                                                            data-preview="holder"
                                                            class="btn btn-primary" type="button">
                                                            Browser
                                                            </button>
                                                        </div>
                                                        <input id="input_category_thumbnail" name="image" value="{{old('image')}}" type="text"
                                                        class="form-control @error('image') is-invalid @enderror"
                                                        placeholder="Path Name" readonly
                                                        />
                                                        @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div id="holder"></div>
                                            </div>

                                                 <!--Photo -->




                                        </div>
                                        <!-- end card-body -->

                                        <!-- start card-footer -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                            <button type="reset" class="btn btn-secondary bg-secondary text-light waves-effect waves-light">Reset</button>
                                        </div>
                                        <!-- start card-footer -->
                                    </form>
                                    </div>
                                    <!-- end card-->

                            </div> <!-- end col -->
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
@endsection


