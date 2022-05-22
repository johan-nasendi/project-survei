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
                        <h4 class="header-title mb-3"> IDENTITAS RESPONDEN </h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row mb-3">
                                    <label class="col-md-3 col-form-label" for="name"> Nama Lengkap </label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" parsley-trigger="change" required="" placeholder="Nama lengkap anda"
                                            class="form-control parsley-error"  data-parsley-id="27"
                                            aria-describedby="parsley-id-27">
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-27" aria-hidden="false">
                                                <li class="parsley-required"> This value is required. </li>
                                            </ul> --}}
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-md-3 col-form-label" for="place_of_birth"> Tempat Lahir</label>
                                    <div class="col-md-9">
                                        <input type="text" name="place_of_birth" parsley-trigger="change" required="" placeholder="Tempat lahir anda"
                                            class="form-control parsley-error"  data-parsley-id="27"
                                            aria-describedby="parsley-id-27">
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-27" aria-hidden="false">
                                                <li class="parsley-required"> This value is required. </li>
                                            </ul> --}}
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label class="col-md-3 col-form-label" for="place_of_birth"> Tanggal Lahir</label>
                                    <div class="col-md-9">
                                        <input type="date" name="date_of_birth" parsley-trigger="change" required=""
                                            class="form-control parsley-error"  data-parsley-id="27"
                                            aria-describedby="parsley-id-27">
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-27" aria-hidden="false">
                                                <li class="parsley-required"> This value is required. </li>
                                            </ul> --}}
                                    </div>
                                </div>


                            </div> <!-- end col -->

                            <div class="col-6">
                                <div class="form-group row mb-3">
                                    <label class="col-md-3 col-form-label" for="gender">Jenis Kelamin</label>
                                    <div class="col-md-9">
                                        <select name="gender" class="form-control parsley-error" required="" data-parsley-id="27"
                                        aria-describedby="parsley-id-27">
                                            <option selected>---Pilih---</option>
                                            <option value="Male"> Pria</option>
                                            <option value="Female">Perempuan</option>
                                        </select>
                                        {{-- <ul class="parsley-errors-list filled" id="parsley-id-27" aria-hidden="false">
                                                <li class="parsley-required"> This value is required. </li>
                                            </ul> --}}
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-md-3 col-form-label" for="mobile_phone_number">Nomor ponsel</label>
                                    <div class="col-md-9">
                                        <input type="date" name="mobile_phone_number" parsley-trigger="change" required="" placeholder="Nomor ponsel anda yang aktif "
                                            class="form-control parsley-error"  data-parsley-id="27"
                                            aria-describedby="parsley-id-27">
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-27" aria-hidden="false">
                                                <li class="parsley-required"> This value is required. </li>
                                            </ul> --}}
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label class="col-md-3 col-form-label" for="email"> Alamat E-mail  </label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" parsley-trigger="change" required="" placeholder="Alamat email anda yang aktif "
                                        class="form-control parsley-error"  data-parsley-id="27"
                                        aria-describedby="parsley-id-27">
                                        {{-- <ul class="parsley-errors-list filled" id="parsley-id-27" aria-hidden="false">
                                            <li class="parsley-required"> This value is required. </li>
                                        </ul> --}}
                                    </div>
                                </div>


                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>

                    <div class="tab-pane" id="basictab2">
                        <h4 class="header-title mb-3"> PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN </h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                        <div class="form-group">
                                            <label for="#">Lulus dari program studi<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Lulus dari program studi apa ?"
                                            class="form-control parsley-error" id="userName" data-parsley-id="27"
                                            aria-describedby="parsley-id-27">
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-27" aria-hidden="false">
                                                <li class="parsley-required"> This value is required. </li>
                                            </ul> --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Masuk  kuliah <span class="text-danger">*</span></label>
                                            <input type="date" name="email" parsley-trigger="change" required="" placeholder="Enter email" class="form-control parsley-error" id="emailAddress"
                                            data-parsley-id="29" aria-describedby="parsley-id-29">
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-29" aria-hidden="false">
                                            <li class="parsley-required">This value is required</li></ul> --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Lulus  kuliah <span class="text-danger">*</span></label>
                                            <input type="date" name="email" parsley-trigger="change" required="" placeholder="Enter email" class="form-control parsley-error" id="emailAddress"
                                            data-parsley-id="29" aria-describedby="parsley-id-29">
                                            {{-- <ul class="parsley-errors-list filled"
                                            id="parsley-id-29" aria-hidden="false">
                                            <li class="parsley-required">This value is required</li>
                                             </ul> --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">Nilai IPK (Indeks Prestasi Kumulatif)<span class="text-danger">*</span></label>
                                            <input id="#" type="text" placeholder="Berapa nilai IPK (Indeks Prestasi Kumulatif) anda?" required="" class="form-control parsley-error"
                                            data-parsley-id="31" aria-describedby="parsley-id-31">
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-31" aria-hidden="false">
                                                <li class="parsley-required">This value is required.</li>
                                            </ul> --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Selama kuliah, apakah anda menjadi anggota dari suatu organisasi
                                                (sosial, pemuda, organisasi keagamaan) di dalam atau di luar kampus?<span class="text-danger">*</span></label>
                                            <select name="#" class="form-control parsley-error" required="" data-parsley-id="31" aria-describedby="parsley-id-31">
                                                <option selected disabled>---Pilih---</option>
                                                <option value="Yes"> Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-31" aria-hidden="true">
                                                <li class="parsley-required">This value is required.</li>
                                            </ul> --}}
                                        </div>

                                        <div class="form-group">
                                            <label for="#">Seberapa aktif anda di organisasi tersebut?<span class="text-danger">*</span></label>
                                            <div class="checkbox checkbox-pink mb-1">
                                                <input type="checkbox" name="hobbies[]" id="hobby1" value="1" data-parsley-mincheck="2" data-parsley-multiple="hobbies">
                                                <label for="hobby1"> 1 </label>
                                                <small>Pasif</small>
                                                <br>
                                                <input type="checkbox" name="hobbies[]" id="hobby2" value="2"  data-parsley-multiple="hobbies">
                                                <label for="hobby2"> 2 </label>
                                                <small>Tidak Aktif</small>
                                                <br>
                                                <input type="checkbox" name="hobbies[]" id="hobby3" value="3" data-parsley-multiple="hobbies">
                                                <label for="hobby3"> 3 </label>
                                                <small>Kurang Aktif</small>
                                                <br>
                                                <input type="checkbox" name="hobbies[]" id="hobby4" value="4"  data-parsley-multiple="hobbies">
                                                <label for="hobby4"> 4 </label>
                                                <small>Cukup Aktif</small>
                                                <br>
                                                <input type="checkbox" name="hobbies[]" id="hobby5" value="5"  data-parsley-multiple="hobbies">
                                                <label for="hobby5"> 5 </label>
                                                <small>Sangat Aktif</small>
                                            </div>
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-31" aria-hidden="true">
                                                <li class="parsley-required">This value is required.</li>
                                            </ul> --}}
                                        </div>



                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card-box">

                                    <div class="form-group">
                                        <label for="#">Setelah lulus dari Poltekkes, apakah anda melanjutkan pendidikan ke jenjang yang lebih tinggi?<span class="text-danger">*</span></label>
                                        <select name="#" class="form-control parsley-error" required="" data-parsley-id="31" aria-describedby="parsley-id-31">
                                            <option selected disabled>---Pilih---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        {{-- <ul class="parsley-errors-list filled" id="parsley-id-31" aria-hidden="true">
                                            <li class="parsley-required">This value is required.</li>
                                        </ul> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Jika ya, apakah pendidikan yang diambil sesuai dengan latar belakang pendidikan anda di Poltekkes?<span class="text-danger">*</span></label>
                                        <select name="#" class="form-control parsley-error" required="" data-parsley-id="31" aria-describedby="parsley-id-31">
                                            <option selected disabled>---Pilih---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        {{-- <ul class="parsley-errors-list filled" id="parsley-id-31" aria-hidden="true">
                                            <li class="parsley-required">This value is required.</li>
                                        </ul> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Jika anda sudah bekerja, apakah pendidikan yang diambil sesuai dengan bidang pekerjaan anda saat ini?<span class="text-danger">*</span></label>
                                        <select name="#" class="form-control parsley-error" required="" data-parsley-id="31" aria-describedby="parsley-id-31">
                                            <option selected disabled>---Pilih---</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        {{-- <ul class="parsley-errors-list filled" id="parsley-id-31" aria-hidden="true">
                                            <li class="parsley-required">This value is required.</li>
                                        </ul> --}}
                                    </div>

                                    <div class="form-group">
                                        <label for="#">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?<span class="text-danger">*</span></label>
                                        <select name="#" class="form-control parsley-error" required="" data-parsley-id="31" aria-describedby="parsley-id-31">
                                            <option selected disabled>---Pilih---</option>
                                            <option value="Perkuliahan">Perkuliahan</option>
                                            <option value="Praktek Laboratorium">Praktek Laboratorium</option>
                                            <option value="Praktik Klinik">Praktik Klinik</option>
                                            <option value="PKN">Praktek kerja Lapangan/PKN</option>
                                            <option value="Keterlibatan dalam penelitian dosen">Keterlibatan dalam penelitian dosen</option>
                                            <option value="Magang">Magang</option>
                                        </select>
                                        {{-- <ul class="parsley-errors-list filled" id="parsley-id-31" aria-hidden="true">
                                            <li class="parsley-required">This value is required.</li>
                                        </ul> --}}
                                    </div>

                                </div> <!-- end card-box -->
                            </div><!-- end col -->

                        </div> <!-- end row -->
                    </div>

                    <div class="tab-pane" id="basictab3">
                        <h4 class="header-title mb-3"> RIWAYAT PEKERJAAN </h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                        <div class="form-group">
                                            <label for="#">Apakah anda sudah bekerja saat ini ?<span class="text-danger">*</span></label>
                                            <select name="#" class="form-control parsley-error" required="" data-parsley-id="31" aria-describedby="parsley-id-31">
                                                <option selected disabled>---Pilih---</option>
                                                <option value="Yes"> Yes </option>
                                                <option value="No"> No </option>
                                            </select>
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-31" aria-hidden="true">
                                                <li class="parsley-required">This value is required.</li>
                                            </ul> --}}
                                        </div>

                                        <div class="form-group">
                                            <label for="#">Kapan anda mulai mencari pekerjaan?<span class="text-danger">*</span></label>
                                            <select name="#" class="form-control parsley-error" required="" data-parsley-id="31" aria-describedby="parsley-id-31">
                                                <option selected disabled>---Pilih---</option>
                                                <option value="#"> Bulan sebelum lulus</option>
                                                <option value="#"> Bulan setelah lulus</option>
                                                <option value="Saya tidak mencari kerja">Saya tidak mencari kerja</option>
                                            </select>
                                            {{-- <ul class="parsley-errors-list filled" id="parsley-id-31" aria-hidden="true">
                                                <li class="parsley-required">This value is required.</li>
                                            </ul> --}}
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="#">Lulus  kuliah <span class="text-danger">*</span></label>
                                            <input type="date" name="email" parsley-trigger="change" required="" placeholder="Enter email" class="form-control parsley-error" id="emailAddress"
                                            data-parsley-id="29" aria-describedby="parsley-id-29">
                                            <ul class="parsley-errors-list filled"
                                            id="parsley-id-29" aria-hidden="false">
                                            <li class="parsley-required">This value is required</li>
                                        </ul>
                                    </div> --}}

                                </div> <!-- end card-box -->
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
                            <a href="javascript: void(0);" class="btn btn-success">Next</a>
                        </li>
                    </ul>

                </div> <!-- tab-content -->
            </div> <!-- end #basicwizard-->
        </form>





@stop
