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
                                            <li class="breadcrumb-item active">@yield('title')</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Detail Data Respondent</h4>
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
                                    <p class="text-muted">{{$respondent->questions->what_study_program}}</p>

                                    <div class="text-left mt-3">
                                        <p class="text-color-black mb-2 font-13"><strong>Nama Lengkap :</strong><span class="ml-2"> {{$respondent->name}}</span></p>
                                        <p class="text-color-black mb-2 font-13"><strong>Tempat Lahir :</strong><span class="ml-2"> {{$respondent->place_of_birth}}</span></p>
                                        <p class="text-color-black mb-2 font-13"><strong>Tanggal Lahir :</strong><span class="ml-2"> {{$respondent->date_of_birth}}</span></p>
                                        <p class="text-color-black mb-2 font-13"><strong>Jenis Kelamin :</strong><span class="ml-2"> {{$respondent->gender}}</span></p>
                                        <p class="text-color-black mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">{{$respondent->mobile_phone_number}}</span></p>
                                        <p class="text-color-black mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{$respondent->email}}</span></p>
                                    </div>

                                    {{-- <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                                    class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                                    class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                                    class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-danger"><i
                                                    class="mdi mdi-instagram"></i></a>
                                        </li>

                                    </ul> --}}
                                </div> <!-- end card-box -->

                            </div> <!-- end col-->

                            <div class="col-lg-8 col-xl-8">
                                <div class="card-box">
                                    <ul class="nav nav-pills navtab-bg  nav-justified">
                                        <li class="nav-item">
                                            <a href="#aboutme" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                <i class="fa-solid fa-b"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#timeline" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                                <i class="fa-solid fa-c"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <i class="fa-solid fa-d"></i> &  <i class="fa-solid fa-e"></i>
                                            </a>
                                        </li>

                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="aboutme">

                                            <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-graduation-cap"></i>
                                                PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h5>

                                            <ul class="list-unstyled timeline-sm">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B1</span>
                                                    <h5 class="mt-0 mb-1">Lulus dari program studi apa ?</h5>
                                                    <p>{{$respondent->questions->what_study_program}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B2</span>
                                                    <h5 class="mt-0 mb-1">Kapan anda masuk dan lulus kuliah di Prodi tersebut?</h5>
                                                    <p>Masuk Kuliah :  {{$respondent->questions->college_entry_date}} <br>
                                                       Lulus Kuliah : {{$respondent->questions->college_graduation_date}}
                                                    </p>


                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B3</span>
                                                    <h5 class="mt-0 mb-1">Berapa nilai IPK (Indeks Prestasi Kumulatif) anda?</h5>
                                                    <p>{{$respondent->questions->score_ipk}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B4</span>
                                                    <h5 class="mt-0 mb-1">Selama kuliah, apakah anda menjadi anggota dari suatu organisasi (sosial, pemuda, organisasi keagamaan) di dalam atau di luar kampus?</h5>
                                                    <p>{{$respondent->questions->organization}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B5</span>
                                                    <h5 class="mt-0 mb-1">Seberapa aktif anda di organisasi tersebut?</h5>
                                                    <p>{{$respondent->questions->Active_inactive_organization}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B6</span>
                                                    <h5 class="mt-0 mb-1">Setelah lulus dari Poltekkes, apakah anda melanjutkan pendidikan ke jenjang yang lebih tinggi?</h5>
                                                    <p>{{$respondent->questions->further_education_levels}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B7</span>
                                                    <h5 class="mt-0 mb-1">Jika ya, apakah pendidikan yang diambil sesuai dengan latar belakang pendidikan anda di Poltekkes?</h5>
                                                    <p>{{$respondent->questions->educational_background}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B8</span>
                                                    <h5 class="mt-0 mb-1">Jika anda sudah bekerja, apakah pendidikan yang diambil sesuai dengan bidang pekerjaan anda saat ini?</h5>
                                                    <p>{{$respondent->questions->field_work}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">B9</span>
                                                    <h5 class="mt-0 mb-1">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?</h5>
                                                    <p>{{$respondent->questions->according}}</p>
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
                                                    <h5 class="mt-0 mb-1">Apakah anda sudah bekerja saat ini ?</h5>
                                                    <p>{{$respondent->jobex->works}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C2</span>
                                                    <h5 class="mt-0 mb-1">Kapan anda mulai mencari pekerjaan?</h5>
                                                    <p>{{$respondent->jobex->start_work}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C3</span>
                                                    <h5 class="mt-0 mb-1">Apa alasan utama anda tidak mencari pekerjaan setelah lulus kuliah?</h5>
                                                    <p>{{$respondent->jobex->jobs_reason}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C4</span>
                                                    <h5 class="mt-0 mb-1">Berapa bulan setelah lulus anda memperoleh pekerjaan pertama?</h5>
                                                    <p>{{$respondent->jobex->after_how_many_months_job}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C5</span>
                                                    <h5 class="mt-0 mb-1">Berapa bulan setelah keluar STR anda memeroleh pekerjaan pertama?</h5>
                                                    <p>{{$respondent->jobex->get_str}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C6</span>
                                                    <h5 class="mt-0 mb-1">Sebelum anda memperoleh pekerjaan pertama berapa jumlah instansi yang anda lamar, yang merespon, dan yang mengundang wawancara?</h5>
                                                    <p>
                                                        {{$respondent->jobex->amount_applied}} <br>
                                                        {{$respondent->jobex->amount_response_to_applications}} <br>
                                                        {{$respondent->jobex->amount_inviting_interviews}}
                                                    </p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C7</span>
                                                    <h5 class="mt-0 mb-1">Bagaimana anda mencari pekerjaan?</h5>
                                                    <p>{{$respondent->jobex->how_to_find_a_job}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C8</span>
                                                    <h5 class="mt-0 mb-1">Instansi tempat anda bekerja?</h5>
                                                    <p>{{$respondent->jobex->workplace}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C9</span>
                                                    <h5 class="mt-0 mb-1">Apa nama instansi tempat anda bekerja?</h5>
                                                    <p>{{$respondent->jobex->name_workplace}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C10</span>
                                                    <h5 class="mt-0 mb-1">Apakah pekerjaan anda sesuai dengan latar belakang pendidikan?</h5>
                                                    <p>{{$respondent->jobex->job_educational_background}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C11</span>
                                                    <h5 class="mt-0 mb-1">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?</h5>
                                                    <p>{{$respondent->jobex->why_take_the_job}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C12</span>
                                                    <h5 class="mt-0 mb-1">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini</h5>
                                                    <p>{{$respondent->jobex->level_of_education}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C13</span>
                                                    <h5 class="mt-0 mb-1">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</h5>
                                                    <p>{{$respondent->jobex->relationship_study_work}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C14</span>
                                                    <h5 class="mt-0 mb-1">Dalam melaksanakan pekerjaan, menurut penilaian Saudara sejauh mana kompetensi tambahan berikut diperlukan?</h5>
                                                    <p>{{$respondent->jobex->additional_competence}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">C15</span>
                                                    <h5 class="mt-0 mb-1">Berapa rata- rata penghasilan anda per bulan </h5>
                                                    <p>{{$respondent->jobex->income_per_month}}</p>
                                                </li>
                                            </ul>


                                        </div>
                                        <!-- end timeline content-->

                                        <div class="tab-pane" id="settings">
                                            <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-briefcase"></i>
                                                KOMPETENSI DAN HUBUNGAN ANTARA PROGRAM STUDI DENGAN DUNIA KERJA</h5>
                                            <ul class="list-unstyled timeline-sm">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">D1</span>
                                                    <h5 class="mt-0 mb-1">Kesesuaian Kurikulum dengan dunia kerja ?</h5>
                                                    <p>{{$respondent->relastionship->curriculum_compatibility_jobs}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">D2</span>
                                                    <h5 class="mt-0 mb-1">Kesesuaian Kompetensi yang diperoleh di Poltekkes Kemenkes berikut ini dalam melaksanakan pekerjaan anda ?</h5>
                                                    <p>{{$respondent->relastionship->health_polytechnic_Competence}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">D3</span>
                                                    <h5 class="mt-0 mb-1">Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?</h5>
                                                    <p>{{$respondent->relastionship->competency_mastered}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">D4</span>
                                                    <h5 class="mt-0 mb-1">Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?</h5>
                                                    <p>{{$respondent->relastionship->competencies_required_job}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">D5</span>
                                                    <h5 class="mt-0 mb-1">Kebutuhan peningkatan Kompetensi yang perlu ditambah pada kurikulum Prodi</h5>
                                                    <p>{{$respondent->relastionship->competency_improvement_needs}}</p>
                                                </li>
                                            </ul>

                                            <h5 class="mb-4 text-uppercase"><i class="fas fa-network-wired"></i>
                                                KOMUNIKASI ANTARA ALUMNI DENGAN POLTEKKES KEMENKES</h5>
                                            <ul class="list-unstyled timeline-sm">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">E1</span>
                                                    <h5 class="mt-0 mb-1">Keikutsertaan dalam Ikatan alumni Poltekkes?</h5>
                                                    <p>{{$respondent->alumniComunication->alumni_association}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">E2</span>
                                                    <h5 class="mt-0 mb-1">Media komunikasi yang digunakan?</h5>
                                                    <p>
                                                        <i class="fab fa-facebook"></i> {{$respondent->alumniComunication->fb}} <br>
                                                        <i class="fab fa-instagram"></i> {{$respondent->alumniComunication->ig}} <br>
                                                        <i class="fab fa-linkedin"></i> {{$respondent->alumniComunication->linkend}}
                                                    </p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">E3</span>
                                                    <h5 class="mt-0 mb-1">Apakah kegiatan alumni sudah dirasakan memberikan kontribusi kepada pengembangan kompetensi dan institusi</h5>
                                                    <p>{{$respondent->alumniComunication->development_of_competencies_and_institutions}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">E4</span>
                                                    <h5 class="mt-0 mb-1">Kegiatan apa sajakah yang dirasakan perlu dikembangkan untuk menjalin kerjasama antara institusi dengan ikatan alumni?</h5>
                                                    <p>{{$respondent->alumniComunication->cooperation_institutions_alumni_associations}}</p>
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


