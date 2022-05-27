@extends('layouts._app-home-pages.landing')
@section('title','Poltekkes Jayapura')
@section('content')

@push('css-internal')
    <!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;800&display=swap" rel="stylesheet">
@endpush

@push('js-external')
<link href="{{ asset('/css/background.css') }}" rel="stylesheet">
@endpush

        <h1 class="header-titl"> Kuesioner Tracer Study (Alumni) </h1>
        <br>

            <form action=" {{route('respondent-identity.store')}} " method="POST">
                @csrf
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
                                        <label class="col-md-3 col-form-label" for="name"> Nama Lengkap<span class="text-danger">*</span> </label>
                                        <div class="col-md-9">
                                            <input type="text"  name="name" value="{{ old('name') }}"  placeholder="Nama lengkap anda"
                                            class="form-control @error('name') is-invalid @enderror" required="" autocomplete="name"   autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label class="col-md-3 col-form-label" for="place_of_birth"> Tempat Lahir <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text"  name="place_of_birth" value="{{ old('place_of_birth') }}"  placeholder="Tempat lahir anda"
                                            class="form-control @error('place_of_birth') is-invalid @enderror" required="" autocomplete="place_of_birth" autofocus>
                                            @error('place_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label class="col-md-3 col-form-label" for="date_of_birth"> Tanggal Lahir <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="date"  name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror"
                                            required="" autocomplete="date_of_birth" autofocus value="{{ old('date_of_birth') }}">
                                            @error('date_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>


                                </div> <!-- end col -->

                                <div class="col-6">
                                    <div class="form-group row mb-3">
                                        <label class="col-md-3 col-form-label" for="gender">Jenis Kelamin <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <select name="gender"  class="form-control @error('gender') is-invalid @enderror"
                                            required="" autocomplete="gender" autofocus>
                                                <option selected>---Pilih---</option>
                                                <option value="Male"> Pria</option>
                                                <option value="Female">Perempuan</option>
                                            </select>
                                            @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label class="col-md-3 col-form-label" for="mobile_phone_number">Nomor ponsel <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="number"  name="mobile_phone_number" value="{{old('mobile_phone_number')}}" required="" autocomplete="mobile_phone_number" autofocus
                                             placeholder="Nomor ponsel anda yang aktif " class="form-control @error('mobile_phone_number') is-invalid @enderror">
                                             @error('mobile_phone_number')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label class="col-md-3 col-form-label" for="email"> Alamat E-mail <span class="text-danger">*</span> </label>
                                        <div class="col-md-9">
                                            <input type="email" id="textsend" onkeyup="success()" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror"
                                            required="" autocomplete="email" autofocus placeholder="Alamat email anda yang aktif">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>


                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                </li>
                                <li class="next list-inline-item float-right" >
                                    <button type="submit" id="button" disabled class="btn btn-warning"> Next </button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="basictab2">
                            <h4 class="header-title mb-3"> PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN </h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-box">
                                            <div class="form-group">
                                                <label for="#">Lulus dari program studi<span class="text-danger">*</span></label>
                                                <input type="text" name="what_study_program" value="{{old('what_study_program')}}"
                                                placeholder="Lulus dari program studi apa ?" class="form-control @error('what_study_program') is-invalid @enderror"
                                                required="" autocomplete="what_study_program" autofocus>
                                                @error('what_study_program')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="#">Masuk  kuliah <span class="text-danger">*</span></label>
                                                <input type="date" name="college_entry_date" value="{{old('college_entry_date')}}"
                                                required="" autocomplete="college_entry_date" autofocus placeholder="Kapan Anda Masuk Kuliah?" class="form-control @error('college_entry_date') is-invalid @enderror">
                                                @error('college_entry_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="#">Lulus  kuliah <span class="text-danger">*</span></label>
                                                <input type="date" name="college_graduation_date" value="{{old('college_graduation_date')}}"
                                                required="" autocomplete="college_graduation_date" placeholder="Kapan Anda Lulus Kuliah ?"
                                                class="form-control @error('college_graduation_date') is-invalid @enderror">
                                                @error('college_graduation_date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                               @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="pass1">Nilai IPK (Indeks Prestasi Kumulatif)<span class="text-danger">*</span></label>
                                                <input  type="text" name="score_ipk" value="{{old('score_ipk')}}"
                                                placeholder="Berapa nilai IPK (Indeks Prestasi Kumulatif) anda?"
                                                required="" autocomplete="score_ipk" class="form-control @error('score_ipk') is-invalid @enderror">
                                                @error('score_ipk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                           @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="#">Selama kuliah, apakah anda menjadi anggota dari suatu organisasi
                                                    (sosial, pemuda, organisasi keagamaan) di dalam atau di luar kampus?<span class="text-danger">*</span></label>
                                                <select name="organization" class="form-control @error('organization') is-invalid @enderror"
                                                required="" autocomplete="organization">
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Yes"> Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                @error('organization')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                               @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="#">Seberapa aktif anda di organisasi tersebut?<span class="text-danger">*</span></label>
                                                <div class="checkbox checkbox-pink mb-1 @error('Active_inactive_organization') is-invalid @enderror">
                                                    <input type="checkbox" value="{{old('Active_inactive_organization')}}"
                                                    name="Active_inactive_organization[]" id="hobby1"
                                                    value="1" data-parsley-mincheck="2"
                                                    data-parsley-multiple="hobbies" >

                                                    <label for="hobby1"> 1 </label>
                                                    <small>Pasif</small>
                                                    <br>
                                                    <input type="checkbox" value="{{old('Active_inactive_organization')}}"
                                                    name="Active_inactive_organization[]" id="hobby2" value="2"
                                                    data-parsley-multiple="hobbies" >
                                                    <label for="hobby2"> 2 </label>
                                                    <small>Tidak Aktif</small>
                                                    <br>
                                                    <input type="checkbox" value="{{old('Active_inactive_organization')}}"
                                                    name="Active_inactive_organization[]" id="hobby3" value="3"
                                                    data-parsley-multiple="hobbies" >
                                                    <label for="hobby3"> 3 </label>
                                                    <small>Kurang Aktif</small>
                                                    <br>
                                                    <input type="checkbox" value="{{old('Active_inactive_organization')}}"
                                                    name="Active_inactive_organization[]" id="hobby4" value="4"
                                                    data-parsley-multiple="hobbies" >
                                                    <label for="hobby4"> 4 </label>
                                                    <small>Cukup Aktif</small>
                                                    <br>
                                                    <input type="checkbox" value="{{old('Active_inactive_organization')}}"
                                                    name="Active_inactive_organization[]" id="hobby5" value="5"
                                                    data-parsley-multiple="hobbies" >
                                                    <label for="hobby5"> 5 </label>
                                                    <small>Sangat Aktif</small>
                                                </div>
                                                @error('Active_inactive_organization')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                               @enderror

                                            </div>



                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card-box">

                                        <div class="form-group">
                                            <label for="#">Setelah lulus dari Poltekkes, apakah anda melanjutkan pendidikan ke jenjang yang lebih tinggi?
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select name="further_education_levels" class="form-control @error('further_education_levels') is-invalid @enderror"
                                            required="" autocomplete="further_education_levels">
                                                <option selected disabled>---Pilih---</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            @error('further_education_levels')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                           @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Jika ya, apakah pendidikan yang diambil sesuai dengan latar belakang pendidikan anda di Poltekkes?
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select name="educational_background" class="form-control @error('educational_background') is-invalid @enderror"
                                            required="" autocomplete="educational_background">
                                                <option selected disabled>---Pilih---</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            @error('educational_background')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                           @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="#">Jika anda sudah bekerja, apakah pendidikan yang diambil sesuai dengan bidang pekerjaan anda saat ini?
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select name="field_work" class="form-control @error('field_work') is-invalid @enderror"
                                            required="" autocomplete="field_work">
                                                <option selected disabled>---Pilih---</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            @error('field_work')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                           @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="#">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select name="according" class="form-control @error('according') is-invalid @enderror"
                                            required="" autocomplete="according">
                                                <option selected disabled>---Pilih---</option>
                                                <option value="Perkuliahan">Perkuliahan</option>
                                                <option value="Praktek Laboratorium">Praktek Laboratorium</option>
                                                <option value="Praktik Klinik">Praktik Klinik</option>
                                                <option value="PKN">Praktek kerja Lapangan/PKN</option>
                                                <option value="Keterlibatan dalam penelitian dosen">Keterlibatan dalam penelitian dosen</option>
                                                <option value="Magang">Magang</option>
                                            </select>
                                            @error('according')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                           @enderror
                                        </div>

                                    </div> <!-- end card-box -->
                                </div><!-- end col -->

                            </div> <!-- end row -->
                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                </li>
                                <li class="next list-inline-item float-right" >
                                    <a href="javascript: void(0);"  class="btn btn-warning">Next</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="basictab3">
                            <h4 class="header-title mb-3"> RIWAYAT PEKERJAAN </h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-box">
                                            <div class="form-group">
                                                <label for="#">Apakah anda sudah bekerja saat ini ?<span class="text-danger">*</span></label>
                                                <select  name="works" class="form-control @error('works') is-invalid @enderror" id="test"
                                                required="" autocomplete="works" autofocus onchange="showDiv();">
                                                    <option selected>---Pilih---</option>
                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>
                                                @error('works')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group" id="hidden_div_yes_one" style="display: none;">
                                                <label for="#">Kapan anda mulai mencari pekerjaan?<span class="text-danger">*</span></label>
                                                <select name="start_work" class="form-control @error('start_work') is-invalid @enderror" >
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Sebelum Lulus"> Bulan sebelum lulus</option>
                                                    <option value="Setelah Lulus"> Bulan setelah lulus</option>
                                                </select>
                                                @error('start_work')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            </div>
                                            <div class="form-group" id="hidden_div_no" style="display: none;">
                                                <label for="#">Apa alasan utama anda tidak mencari pekerjaan setelah lulus kuliah?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select onchange="showArea();" name="jobs_reason" id="other"
                                                class="form-control @error('jobs_reason') is-invalid @enderror"">
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Saya memulai bisnis sendiri"> Saya memulai bisnis sendiri </option>
                                                    <option value="Saya melanjutkan kuliah"> Saya melanjutkan kuliah </option>
                                                    <option value="1"> Lainnya </option>
                                                </select>
                                                @error('jobs_reason')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>


                                            <div class="form-group" id="hidden_textarea" style="display: none;" >
                                                <label for="#"> Berikan Alasan anda tidak mencari pekerjaan setelah lulus kuliah?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <textarea class="form-control @error('jobs_reason') is-invalid @enderror" name="jobs_reason"  rows="3"> {{old('jobs_reason')}} </textarea>
                                                @error('jobs_reason')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>

                                            <div class="form-group" id="hidden_div_yes_two" style="display: none;" >
                                                <label for="#"> Berapa bulan setelah lulus anda memperoleh pekerjaan pertama?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" name="after_how_many_months_job" placeholder="Berapa bulan setelah lulus anda memperoleh pekerjaan pertama?"
                                                class="form-control @error('after_how_many_months_job') is-invalid @enderror">
                                                @error('after_how_many_months_job')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>

                                            <div class="form-group" id="hidden_div_yes_three" style="display: none;" >
                                                <label for="#"> Berapa bulan setelah keluar STR anda memeroleh pekerjaan pertama?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="number" name="get_str" placeholder="Bulan ke berapa anda memperoleh pekerjaan anda ?"
                                                class="form-control @error('get_str') is-invalid @enderror">
                                                @error('get_str')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>

                                            <div class="form-group" id="hidden_div_yes_four" style="display: none;" >
                                                <label for="#"> Sebelum anda memperoleh pekerjaan pertama berapa jumlah instansi yang anda lamar,
                                                    yang merespon, dan yang mengundang wawancara?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="number" name="amount_applied" placeholder="Jumlah Instansi yang dilamar"
                                                class="form-control @error('amount_applied') is-invalid @enderror">
                                                @error('amount_applied')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                 @enderror
                                                <br>
                                                <input type="number" name="amount_response_to_applications" parsley-trigger="change"
                                                placeholder="Jumlah instansi merespon lamaran" class="form-control @error('amount_response_to_applications') is-invalid @enderror">
                                                @error('amount_response_to_applications')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <br>
                                                <input type="number" name="amount_inviting_interviews" parsley-trigger="change"
                                                placeholder="Jumlah instansi yang mengundang wawancara" class="form-control @error('amount_inviting_interviews') is-invalid @enderror ">
                                                @error('amount_inviting_interviews')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>

                                            <div class="form-group" id="hidden_div_yes_five" style="display: none;" >
                                                <label for="#">Bagaimana anda mencari pekerjaan?<span class="text-danger">*</span></label>
                                                <select name="how_to_find_a_job" class="form-control @error('how_to_find_a_job') is-invalid @enderror" >
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Saya memulai bisnis sendiri"> Melamar ke instansi </option>
                                                    <option value="Saya melanjutkan kuliah"> Mencari lewat internet/iklan online/milis </option>
                                                    <option value="Dihubungi oleh instansi (RS, Klinik, perusahaan, dll)"> Dihubungi oleh instansi (RS, Klinik, perusahaan, dll) </option>
                                                    <option value="Memperoleh informasi dari Poltekkes"> Memperoleh informasi dari Poltekkes </option>
                                                    <option value="Melalui penempatan kerja atau magang"> Melalui penempatan kerja atau magang </option>
                                                    <option value="Melalui jejaring alumni"> Melalui jejaring alumni </option>
                                                    <option value="Melalui jejaring/relasi orang tua/saudara/teman/dosen"> Melalui jejaring/relasi orang tua/saudara/teman/dosen </option>
                                                    <option value="#"> Lainnya: </option>
                                                </select>
                                                @error('how_to_find_a_job')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>


                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card-box">
                                            <div class="form-group" id="hidden_div_yes_six" style="display: none;">
                                                <label for="#">Instansi tempat anda bekerja?<span class="text-danger">*</span></label>
                                                <select name="workplace" class="form-control @error('workplace') is-invalid @enderror">
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Instansi Pemerintah"> Instansi Pemerintah (termasuk BUMN) </option>
                                                    <option value="Swasta"> Swasta </option>
                                                    <option value="Organisasi non profit/LSM"> Organisasi non profit/LSM </option>
                                                    <option value="Usaha sendiri"> Usaha sendiri </option>
                                                    <option value="#"> Lainya.................. </option>
                                                </select>
                                                @error('workplace')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group" id="hidden_div_yes_seven" style="display: none;">
                                                <label for="#">Apa nama instansi tempat anda bekerja?<span class="text-danger">*</span></label>
                                                <select name="name_workplace" class="form-control @error('name_workplace') is-invalid @enderror" >
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Puskesmas"> Puskesmas</option>
                                                    <option value="Klinik"> Klinik</option>
                                                    <option value="RS">RS</option>
                                                    <option value="Apotik">Apotik</option>
                                                    <option value="Laboratorium">Laboratorium</option>
                                                    <option value="#"> Lainya.................. </option>
                                                </select>
                                                @error('name_workplace')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group" id="hidden_div_yes_eight" style="display: none;">
                                                <label for="#">Apakah pekerjaan anda sesuai dengan latar belakang pendidikan?<span class="text-danger">*</span></label>
                                                <select name="job_educational_background" class="form-control @error('job_educational_background') is-invalid @enderror">
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Yes"> Yes </option>
                                                    <option value="No"> No </option>
                                                </select>
                                                @error('job_educational_background')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group" id="hidden_div_yes_nine" style="display: none;">
                                                <label for="#">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select name="why_take_the_job" class="form-control @error('why_take_the_job') is-invalid @enderror">
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Saya belum mendapatkan pekerjaan yang lebih sesuai"> Saya belum mendapatkan pekerjaan yang lebih sesuai </option>
                                                    <option value="Di pekerjaan ini saya memeroleh prospek karir yang baik"> Di pekerjaan ini saya memeroleh prospek karir yang baik. </option>
                                                    <option value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya"> Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya </option>
                                                    <option value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya"> Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya </option>
                                                    <option value="Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini"> Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini</option>
                                                    <option value="Pekerjaan saya saat ini lebih aman/terjamin/secure"> Pekerjaan saya saat ini lebih aman/terjamin/secure </option>
                                                    <option value="Pekerjaan saya saat ini lebih menarik "> Pekerjaan saya saat ini lebih menarik </option>
                                                    <option value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel"> Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel </option>
                                                    <option value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya"> Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya </option>
                                                    <option value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya"> Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya </option>
                                                    <option value="#"> Lainnya....... </option>
                                                </select>
                                                @error('why_take_the_job')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group" id="hidden_div_yes_ten" style="display: none;">
                                                <label for="#"> Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select name="level_of_education" class="form-control @error('level_of_education') is-invalid @enderror">
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Setingkat lebih tinggi"> Setingkat lebih tinggi  </option>
                                                    <option value="Tingkat yang sama"> Tingkat yang sama </option>
                                                    <option value="Setingkat lebih rendah"> Setingkat lebih rendah </option>
                                                </select>
                                                @error('level_of_education')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group" id="hidden_div_yes_eleven" style="display: none;">
                                                <label for="#"> Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select name="relationship_study_work" class="form-control @error('relationship_study_work') is-invalid @enderror">
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Sangat erat"> Sangat erat  </option>
                                                    <option value="Erat"> Erat </option>
                                                    <option value="Cukup erat"> Cukup erat </option>
                                                    <option value="Kurang erat"> Kurang erat </option>
                                                    <option value="Tidak sama sekali"> Tidak sama sekali </option>
                                                </select>
                                                @error('relationship_study_work')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group" id="hidden_div_yes_eleven" style="display: none;">
                                                <label for="#"> Dalam melaksanakan pekerjaan, menurut penilaian Saudara sejauh mana kompetensi tambahan berikut diperlukan?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select name="additional_competence" class="form-control @error('additional_competence') is-invalid @enderror">
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Pengetahuan Umum"> Pengetahuan Umum  </option>
                                                    <option value="Penguasaan Bahasa Inggris"> Penguasaan Bahasa Inggris </option>
                                                    <option value="Penguasaan Teknologi Informasi">Penguasaan Teknologi Informasi </option>
                                                    <option value="Ketrampilan Komunikasi"> Ketrampilan Komunikasi </option>
                                                    <option value="Kerjasama Tim"> Kerjasama Tim </option>
                                                </select>
                                                @error('additional_competence')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group" id="hidden_div_yes_twelve" style="display: none;">
                                                <label for="#"> Berapa rata- rata penghasilan anda per bulan?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select name="income_per_month" class="form-control @error('income_per_month') is-invalid @enderror">
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value=" < 2000000"> < Rp. 2.000.000,-  </option>
                                                    <option value=" > 2000000 - 3500000"> > Rp. 2.000.000. – 3.500.000,- </option>
                                                    <option value="> 3500000 -  5000000 "> > Rp. 3.500.000 – 5.000.000.- </option>
                                                    <option value=" > 5000000 - 6500000 "> >Rp. 5.000.000. – 6.500.000.- </option>
                                                    <option value="6500000"> >Rp. 6.500.000,- </option>
                                                </select>
                                                @error('income_per_month')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->

                            </div> <!-- end row -->
                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                </li>
                                <li class="next list-inline-item float-right" >
                                    <a href="javascript: void(0);"  class="btn btn-warning">Next</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="basictab4">
                            <h4 class="header-title mb-3"> KOMPETENSI DAN HUBUNGAN ANTARA PROGRAM STUDI DENGAN DUNIA KERJA </h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-box">
                                            <div class="form-group">
                                                <label for="#">Kesesuaian Kurikulum dengan dunia kerja <span class="text-danger">*</span></label>
                                                <select name="curriculum_compatibility_jobs" class="form-control @error('curriculum_compatibility_jobs') is-invalid @enderror"
                                                 required="" autocomplete="curriculum_compatibility_jobs" autofocus>
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Sangat Tidak Sesuai"> [1] Sangat Tidak Sesuai </option>
                                                    <option value="Tidak Sesuai"> [2] Tidak Sesuai </option>
                                                    <option value="Kurang Sesuai"> [3] Kurang Sesuai </option>
                                                    <option value="Sesuai"> [4] Sesuai </option>
                                                    <option value="Sangat Sesuai"> [5] Sangat Sesuai </option>
                                                </select>
                                                @error('curriculum_compatibility_jobs')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                 @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="#">Kesesuaian Kompetensi yang diperoleh di Poltekkes Kemenkes berikut ini dalam melaksanakan pekerjaan anda?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select name="health_polytechnic_Competence" class="form-control @error('health_polytechnic_Competence') is-invalid @enderror"
                                                required="" autocomplete="health_polytechnic_Competence" autofocus>
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Pengetahuan di bidang atau disiplin ilmu"> Pengetahuan di bidang atau disiplin ilmu </option>
                                                    <option value="Pengetahuan di luar bidang disiplin ilmu"> Pengetahuan di luar bidang disiplin ilmu</option>
                                                </select>
                                                @error('health_polytechnic_Competence')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                 @enderror
                                            </div>

                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card-box">
                                            <div class="form-group">
                                                <label for="">Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select name="competency_mastered" class="form-control @error('competency_mastered') is-invalid @enderror"
                                                required="" autocomplete="competency_mastered" autofocus>
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Pengetahuan di bidang atau disiplin ilmu">Pengetahuan di bidang atau disiplin ilmu </option>
                                                    <option value="Pengetahuan di luar bidang disiplin ilmu"> Pengetahuan di luar bidang disiplin ilmu </option>
                                                    <option value="Penguasaan Bahasa Inggris"> Penguasaan Bahasa Inggris </option>
                                                    <option value="Penguasaan Teknologi Informasi"> Penguasaan Teknologi Informasi </option>
                                                    <option value="Ketrampilan Komunikasi"> Ketrampilan Komunikasi </option>
                                                    <option value="Kerjasama Tim"> Kerjasama Tim </option>
                                                    <option value="Pengetahuan Umum"> Pengetahuan Umum </option>
                                                </select>
                                                @error('competency_mastered')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                 @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="#">Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                     <select name="competencies_required_job" class="form-control @error('competencies_required_job') is-invalid @enderror"
                                                     required="" autocomplete="competencies_required_job" autofocus>
                                                        <option selected disabled>---Pilih---</option>
                                                        <option value="Pengetahuan di bidang atau disiplin ilmu">Pengetahuan di bidang atau disiplin ilmu </option>
                                                        <option value="Pengetahuan di luar bidang disiplin ilmu"> Pengetahuan di luar bidang disiplin ilmu </option>
                                                        <option value="Penguasaan Bahasa Inggris"> Penguasaan Bahasa Inggris </option>
                                                        <option value="Penguasaan Teknologi Informasi"> Penguasaan Teknologi Informasi </option>
                                                        <option value="Ketrampilan Komunikasi"> Ketrampilan Komunikasi </option>
                                                        <option value="Kerjasama Tim"> Kerjasama Tim </option>
                                                        <option value="Pengetahuan Umum"> Pengetahuan Umum </option>
                                                    </select>
                                                    @error('competencies_required_job')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                     @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="#">Kebutuhan peningkatan Kompetensi yang perlu ditambah pada kurikulum Prodi
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select name="competency_improvement_needs" class="form-control @error('competency_improvement_needs') is-invalid @enderror"
                                                required="" autocomplete="competency_improvement_needs" autofocus>
                                                    <option selected disabled>---Pilih---</option>
                                                    <option value="Komunikasi"> Komunikasi </option>
                                                    <option value="Kemampuan berbahasa inggris"> Kemampuan berbahasa inggris </option>
                                                    <option value="Kemampuan penguasaan teknologi informasi"> Kemampuan penguasaan teknologi informasi </option>
                                                </select>
                                                @error('competency_improvement_needs')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                     @enderror
                                            </div>
                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                </li>
                                <li class="next list-inline-item float-right" >
                                    <a href="javascript: void(0);"  class="btn btn-warning">Next</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="basictab5">
                            <h4 class="header-title mb-3"> Alumni Comunicacion </h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-box">
                                             <div class="form-group">
                                                    <label for="#">Keikutsertaan dalam Ikatan alumni Poltekkes?<span class="text-danger">*</span></label>
                                                        <select name="alumni_association" class="form-control @error('alumni_association') is-invalid @enderror"
                                                        required="" autocomplete="alumni_association" autofocus>
                                                            <option selected disabled>---Pilih---</option>
                                                            <option value="Yes"> Yes </option>
                                                            <option value="No"> No </option>
                                                        </select>
                                                        @error('alumni_association')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                         @enderror
                                                </div>

                                            <div class="form-group">
                                                <label for="#">Media komunikasi yang digunakan? Jawaban boleh lebih dari 1<span class="text-danger">*</span></label>
                                                <div class="form-group">
                                                    <label for="pass1">Username Instagram<span class="text-danger">*</span></label>
                                                    <input  type="text" name="fb" placeholder="Masukan usernmae instagram anda"
                                                    class="form-control @error('fb') is-invalid @enderror" value="{{old('fb')}}">
                                                    @error('fb')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="pass1">Username facebook<span class="text-danger">*</span></label>
                                                    <input  type="text" name="ig" placeholder="Masukan usernmae facebook anda"
                                                    class="form-control @error('ig') is-invalid @enderror" value="{{old('ig')}}">
                                                    @error('ig')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="pass1">Username Linkedin<span class="text-danger">*</span></label>
                                                    <input  type="text" name="linkend" placeholder="Masukan username Linkedin anda"
                                                    class="form-control @error('linkend') is-invalid @enderror" value="{{old('linkend')}}">
                                                    @error('linkend')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>
                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card-box">
                                            <div class="form-group">
                                                <label for="#">Apakah kegiatan alumni sudah dirasakan memberikan kontribusi kepada pengembangan kompetensi dan institusi<span class="text-danger">*</span></label>
                                                    <select name="cooperation_institutions_alumni_associations"
                                                    class="form-control @error('cooperation_institutions_alumni_associations') is-invalid @enderror"
                                                    required="" autocomplete="cooperation_institutions_alumni_associations" autofocus>
                                                        <option selected disabled>---Pilih---</option>
                                                        <option value="Sudah"> Sudah </option>
                                                        <option value="#"> Belum </option>
                                                    </select>
                                                    @error('cooperation_institutions_alumni_associations')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="#">Kegiatan apa sajakah yang dirasakan perlu dikembangkan untuk menjalin kerjasama antara institusi dengan ikatan alumni?<span class="text-danger">*</span></label>
                                                    <select name="development_of_competencies_and_institutions"
                                                    class="form-control @error('development_of_competencies_and_institutions') is-invalid @enderror"
                                                    required="" autocomplete="development_of_competencies_and_institutions" autofocus>
                                                        <option selected disabled>---Pilih---</option>
                                                        <option value="Reuni"> Reuni </option>
                                                        <option value="Pengabdian masyarakat bersama"> Pengabdian masyarakat bersama </option>
                                                        <option value="Seminar ilmiah bersama"> Seminar ilmiah bersama </option>
                                                        <option value="Pelatihan"> Pelatihan </option>
                                                    </select>
                                                    @error('development_of_competencies_and_institutions')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                </li>
                                <li class="next list-inline-item float-right" >
                                    <a href="javascript: void(0);"  class="btn btn-warning">Next</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="basictab6">
                            <h4 class="header-title mb-3"> Finish </h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                        <h3 class="mt-0">TERIMA KASIH ATAS PARTISIPASINYA</h3>

                                        <p class="w-75 mb-2 mx-auto">Apakah anda setujuh mengirim data anda kepada kami?
                                            <br> Jika Setuju centang cek box di bawah ini</p>

                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1"
                                                onchange="document.getElementById('sendData').disabled = !this.checked;" />
                                                <label class="custom-control-label" for="customCheck1">Saya setuju</label>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <ul class="list-inline wizard mb-0">
                                <li class="previous list-inline-item disabled">
                                    <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                </li>
                                <li class="next list-inline-item float-right" >
                                    <input type="submit" class="btn btn-success" id="sendData" value="Kirim">
                                    {{-- <a href="javascript: void(0);"  class="btn btn-success"></a> --}}
                                </li>
                            </ul>
                        </div>

                    </div> <!-- tab-content -->
                </div> <!-- end #basicwizard-->
            </form>

@stop
@push('js-internal')
<script type="text/javascript">

    function showDiv(){
        getSelectValue = document.getElementById("test").value;
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_one").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_two").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_three").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_four").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_five").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_six").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_seven").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_eight").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_nine").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_ten").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_eleven").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_twelve").style.display="block";
        }

        else  {
            document.getElementById("hidden_div_yes_one").style.display="none";
            document.getElementById("hidden_div_yes_two").style.display="none";
            document.getElementById("hidden_div_yes_three").style.display="none";
            document.getElementById("hidden_div_yes_four").style.display="none";
            document.getElementById("hidden_div_yes_five").style.display="none";
            document.getElementById("hidden_div_yes_six").style.display="none";
            document.getElementById("hidden_div_yes_seven").style.display="none";
            document.getElementById("hidden_div_yes_ten").style.display="none";
            document.getElementById("hidden_div_yes_eight").style.display="none";
            document.getElementById("hidden_div_yes_nine").style.display="none";
            document.getElementById("hidden_div_yes_eleven").style.display="none";
            document.getElementById("hidden_div_yes_twelve").style.display="none";

        }
        if(getSelectValue == "No"){
            document.getElementById("hidden_div_no").style.display="block";

        } else {
            document.getElementById("hidden_div_no").style.display="none";
        }

    }

    function showArea(){
        getSelectValue = document.getElementById("other").value;
        if(getSelectValue == "1"){
            document.getElementById("hidden_textarea").style.display="block";
        } else {
            document.getElementById("hidden_textarea").style.display="none";
        }
    }

    function success() {
	 if(document.getElementById("textsend").value==="") {
            document.getElementById('button').disabled = true;
        } else {
            document.getElementById('button').disabled = false;
        }
    }

    </script>

@endpush

