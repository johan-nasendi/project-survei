@extends('layouts.app-dashboard')

@section('title')
 Detail Respon
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
                                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dasbor</a></li>
                                            <li class="breadcrumb-item"><a href="{{route('respondent-identity.index')}}">Respon Alumni</a></li>
                                            <li class="breadcrumb-item active">@yield('title')</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Detail Data Respon </h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->



                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">
                                    <img src="{{asset('assets/images/users/user-sacode.png')}}" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                    <h4 class="mb-0"> {{$respondent->name}} </h4>
                                    <p class="text-muted">{{$respondent->what_study_program}}</p>
                                    <div class="text-left mt-3">
                                        <p class="text-color-black mb-2 font-13"><strong>Nama Lengkap :</strong><span class="ml-2"> {{$respondent->name}}</span></p>
                                        <p class="text-color-black mb-2 font-13"><strong>Tempat Lahir :</strong><span class="ml-2"> {{$respondent->place_of_birth}}</span></p>
                                        <p class="text-color-black mb-2 font-13"><strong>Jenis Kelamin :</strong><span class="ml-2"> {{$respondent->gender}}</span></p>
                                        <p class="text-color-black mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">{{$respondent->mobile_phone_number}}</span></p>
                                        <p class="text-color-black mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{$respondent->email}}</span></p>
                                        <p class="text-color-black mb-2 font-13"><strong>Alamat:</strong><span class="ml-2"> {{$respondent->address}}</span></p>
                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col-->

                            <div class="col-lg-8 col-xl-8">
                                <div class="card-box">
                                    <ul class="nav nav-pills navtab-bg  nav-justified">
                                        <li class="nav-item">
                                            <a href="#aboutme" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                <i class="fa-solid fa-a"></i> & <i class="fa-solid fa-b"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#timeline" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                                <i class="fa-solid fa-c"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <i class="fa-solid fa-d"></i>
                                            </a>
                                        </li>

                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="aboutme">

                                            {{-- <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-graduation-cap"></i>
                                                PENGALAMAN PBM</h5> --}}

                                            <ul class="list-unstyled timeline-sm">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">A1</span>
                                                    <h5 class="mt-0 mb-1">Lulus dari program studi apa ?</h5>
                                                    <p>{{$respondent->what_study_program}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">A2</span>
                                                    <h5 class="mt-0 mb-1">Kapan anda masuk dan lulus kuliah di Prodi tersebut?</h5>
                                                    <p> <i class=" fas fa-calendar-alt"></i> Tahun Masuk Kuliah :  {{$respondent->year_of_college_entry}} <br>
                                                        <i class=" fas fa-calendar-alt"></i> Tahun & Bulan Lulus Kuliah : {{$respondent->college_graduation_date}}
                                                    </p>
                                                </li>

                                                <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-graduation-cap"></i>
                                                    PENGALAMAN PBM</h5>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B1</span>
                                                    <h5 class="mt-0 mb-1">Selama kuliah apakah anda pernah menjadi anggota suatu organisasi di dalam atau luar kampus?</h5>
                                                    <p>{{$respondent->pertayaan->active_inactive_organization}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B2</span>
                                                    <h5 class="mt-0 mb-1">Organisasi apa yang pernah anda ikut?</h5>
                                                    <p>{{$respondent->pertayaan->organization_name}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B3</span>
                                                    <h5 class="mt-0 mb-1">Selama Kuliah, menurut saudara bagaimana kemampuan dosen dalam mengampu mata kuliah?</h5>
                                                    <p>{{$respondent->pertayaan->lecturer_ability}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B4</span>
                                                    <h5 class="mt-0 mb-1">Bagaimana ketrampilan dosen dan instruktur dalam memberikan praktek?</h5>
                                                    <p>{{$respondent->pertayaan->lecturer_skills_practice}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B5</span>
                                                    <h5 class="mt-0 mb-1">Bagaimana pelayanan Rektorat dalam memberikan pengurusan administrasi mahasiswa</h5>
                                                    <p>{{$respondent->pertayaan->rectors_service}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B6</span>
                                                    <h5 class="mt-0 mb-1">Bagaimana pelayanan Program studi dalam memberikan pengurusan administrasi mahasiswa</h5>
                                                    <p>{{$respondent->pertayaan->study_program_services}}</p>
                                                </li>
                                            </ul>


                                        </div> <!-- end tab-pane -->
                                        <!-- end about me section content -->

                                        <div class="tab-pane " id="timeline">

                                            <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-briefcase"></i>
                                                RIWAYAT PEKERJAAN</h5>

                                            <ul class="list-unstyled timeline-sm">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C1</span>
                                                    <h5 class="mt-0 mb-1">Apakah anda bekerja ?</h5>
                                                    <p>{{$respondent->pekerjaan->do_you_work}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C2</span>
                                                    <h5 class="mt-0 mb-1">Jika Sudah dimana anda bekerja?</h5>
                                                    @if(empty($respondent->pekerjaan->workplace))
                                                    <p>Tidak Ada Data</p>
                                                    @else
                                                    <p>{{$respondent->pekerjaan->workplace}}</p>
                                                    @endif
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C3</span>
                                                    <h5 class="mt-0 mb-1">Nama Instansi tempat bekerja?</h5>
                                                    @if(empty($respondent->pekerjaan->name_workplace))
                                                    <p>Tidak Ada Data</p>
                                                    @else
                                                    <p>{{$respondent->pekerjaan->name_workplace}}</p>
                                                    @endif
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C4</span>
                                                    <h5 class="mt-0 mb-1">Kapan Mulai Bekerja (bulan/tahun)?</h5>
                                                    @if(empty($respondent->pekerjaan->start_work ))
                                                    <p>Tidak Ada Data</p>
                                                    @else
                                                    <p>{{$respondent->pekerjaan->start_work}}</p>
                                                    @endif

                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C5</span>
                                                    <h5 class="mt-0 mb-1">Alamat tempat kerja?</h5>
                                                    @if(empty($respondent->pekerjaan->address_work ))
                                                    <p>Tidak Ada Data</p>
                                                    @else
                                                    <p>{{$respondent->pekerjaan->address_work}}</p>
                                                    @endif
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C6</span>
                                                    <h5 class="mt-0 mb-1">Apakah pekerjaan anda sesuai dengan latar belakang pendidikan?</h5>
                                                    @if(empty($respondent->pekerjaan->job_educational_background ))
                                                    <p> Tidak ada data </p>
                                                    @else
                                                    <p>
                                                        {{$respondent->pekerjaan->job_educational_background}} <br>
                                                    </p>
                                                    @endif
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C7</span>
                                                    <h5 class="mt-0 mb-1">Berapa gaji pertama anda?</h5>
                                                    @if(empty($respondent->pekerjaan->income_per_month ))
                                                    <p>Tidak ada data</p>
                                                    @else
                                                    <p>{{$respondent->pekerjaan->income_per_month}}</p>
                                                    @endif
                                                </li>

                                        </div>
                                        <!-- end timeline content-->

                                        <div class="tab-pane" id="settings">
                                            <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-briefcase"></i>
                                                SARAN & KRITIK</h5>
                                            <ul class="list-unstyled timeline-sm">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">D1</span>
                                                    <h5 class="mt-0 mb-1">Proses Belajar Mengajar?</h5>
                                                    <p>{{$respondent->relasi->learning_process}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">D2</span>
                                                    <h5 class="mt-0 mb-1">Kurikulum?</h5>
                                                    <p>{{$respondent->relasi->curriculum}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">D3</span>
                                                    <h5 class="mt-0 mb-1">Layanan Administrasi Kemahasiswaan?</h5>
                                                    <p>{{$respondent->relasi->student_admini_services}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">D4</span>
                                                    <h5 class="mt-0 mb-1">Sarana dan Prasarana?</h5>
                                                    <p>{{$respondent->relasi->facilities_infrastructure}}</p>
                                                </li>

                                            </ul>

                                        </div>
                                        <!-- end settings content-->

                                    </div> <!-- end tab-content -->
                                </div> <!-- end card-box-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

@endsection


