@extends('layouts._app-home-pages.landing')
@section('title','Poltekkes Jayapura')
@section('content')

@push('css-internal')
    <!-- App css -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{asset('/assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="{{asset('/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
@endpush

<div class="content custom-scrollbar">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <br><br><br><br><br><br>
                        <h1 class="header-titl"> Kuesioner Tracer Study (Alumni) </h1>
                        @if (count($errors) > 0)
                            <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        @endif
                        <div id="basicwizard">
                            @include('layouts.component.nav-form')
                            <form name="frm" action="{{route('forum.post')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content b-0 mb-0 pt-0">
                                    @include('layouts.component.content-form')
                                </div> <!-- tab-content -->
                            </form>
                        </div> <!-- end #basicwizard-->
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
<footer class="footer footer-alt">
    <script>document.write(new Date().getFullYear())</script>
    &copy; Poltekkes Kemenkes Jayapura
</footer>
@stop

@push('js-external')
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
@endpush

@push('js-internal')
    <script type="text/javascript">

    // function showDiv(){
    //     getSelectValue = document.getElementById("test").value;
    //     if(getSelectValue == "Yes") {
    //         document.getElementById("hidden_div_yes_one").style.display="block";
    //     }

    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_two").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_three").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_four").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_five").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_six").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_seven").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_eight").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_nine").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_ten").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_eleven").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_additional_competence").style.display="block";
    //     }
    //     if(getSelectValue == "Yes"){
    //         document.getElementById("hidden_div_yes_twelve").style.display="block";
    //     }

    //     else  {
    //         document.getElementById("hidden_div_yes_one").style.display="none";
    //         document.getElementById("hidden_div_yes_two").style.display="none";
    //         document.getElementById("hidden_div_yes_three").style.display="none";
    //         document.getElementById("hidden_div_yes_four").style.display="none";
    //         document.getElementById("hidden_div_yes_five").style.display="none";
    //         document.getElementById("hidden_div_yes_six").style.display="none";
    //         document.getElementById("hidden_div_yes_seven").style.display="none";
    //         document.getElementById("hidden_div_yes_ten").style.display="none";
    //         document.getElementById("hidden_div_yes_eight").style.display="none";
    //         document.getElementById("hidden_div_yes_nine").style.display="none";
    //         document.getElementById("hidden_div_yes_eleven").style.display="none";
    //         document.getElementById("hidden_div_yes_additional_competence").style.display="none";
    //         document.getElementById("hidden_div_yes_twelve").style.display="none";

    //     }
    //     if(getSelectValue == "No"){
    //         document.getElementById("hidden_div_no").style.display="block";

    //     } else {
    //         document.getElementById("hidden_div_no").style.display="none";
    //     }

    // }

    // function showArea(){
    //     getSelectValue = document.getElementById("jobs_reason").value;
    //     if(getSelectValue == "1"){
    //         document.getElementById("hidden_textarea").style.display="block";
    //     } else {
    //         document.getElementById("hidden_textarea").style.display="none";
    //     }
    // }

    function IsEmpty() {
        // Respondent
        if (document.forms['frm'].name.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>A.IDENTITAS ALUMNI</h4>'
            })
                return false;
            }
            if (document.forms['frm'].email.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>A.IDENTITAS ALUMNI</h4>'
            })
                return false;
            }
            if (document.forms['frm'].mobile_phone_number.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>A.IDENTITAS ALUMNI</h4>'
            })
                return false;
            }
            if (document.forms['frm'].place_of_birth.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>A.IDENTITAS ALUMNI</h4>'
            })
                return false;
            }
            if (document.forms['frm'].date_of_birth.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>A.IDENTITAS ALUMNI</h4>'
            })
                return false;
            }
            if (document.forms['frm'].gender.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>A.IDENTITAS ALUMNI</h4>'
            })
                return false;
            }
            if (document.forms['frm'].what_study_program.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>A.IDENTITAS ALUMNI</h4>'
            })
                return false;
            }
            if (document.forms['frm'].year_of_college_entry.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>A.IDENTITAS ALUMNI</h4>'
            })
                return false;
            }

            if (document.forms['frm'].college_graduation_date.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>A.IDENTITAS ALUMNI</h4>'
            })
                return false;
            }



        //    B

            if (document.forms['frm'].organization_name.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>B.PENGALAMAN PBM</h4>'
            })
                return false;
            }
            if (document.forms['frm'].active_inactive_organization.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>B.PENGALAMAN PBM</h4>'
            })
                return false;
            }
            if (document.forms['frm'].lecturer_ability.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>B.PENGALAMAN PBM</h4>'
            })
                return false;
            }
            if (document.forms['frm'].lecturer_skills_practice.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>B.PENGALAMAN PBM</h4>'
            })
                return false;
            }
            if (document.forms['frm'].rectors_service.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>B.PENGALAMAN PBM</h4>'
            })
                return false;
            }
            if (document.forms['frm'].study_program_services.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>B.PENGALAMAN PBM</h4>'
            })
                return false;
        }

            // RIWAYAT PEKERJAAN
        if (document.forms['frm'].do_you_work.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>C.RIWAYAT PEKERJAAN</h4>'
            })
                return false;
        }



            // D.Saran dan Kritik
        if (document.forms['frm'].learning_process.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>D.SARAN & KRITIK</h4>'
            })
                return false;
            }

            if (document.forms['frm'].curriculum.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>D.SARAN & KRITIK</h4>'
            })
                return false;
            }

            if (document.forms['frm'].student_admini_services.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>D.SARAN & KRITIK</h4>'
            })
                return false;
            }

            if (document.forms['frm'].facilities_infrastructure.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>D.SARAN & KRITIK</h4>'
            })
                return false;
            }

            if (document.forms['frm'].competency_improvement_needs.value === "") {
                Swal.fire({icon: 'error',title: 'Oops...',
                text: 'Data anda belum lengkap,Mohon dilengkapi',
                footer: '<h4>D.SARAN & KRITIK</h4>'
            })
                return false;
        }

            // KOMUNIKASI ANTARA ALUMNI DENGAN POLTEKKES KEMENKES
        // if (document.forms['frm'].alumni_association.value === "") {
        //         Swal.fire({icon: 'error',title: 'Oops...',
        //         text: 'Data anda belum lengkap,Mohon dilengkapi',
        //         footer: '<h4>E.KOMUNIKASI ANTARA ALUMNI DENGAN POLTEKKES KEMENKES</h4>'
        //     })
        //         return false;
        //     }
        //     if (document.forms['frm'].cooperation_institutions_alumni_associations.value === "") {
        //         Swal.fire({icon: 'error',title: 'Oops...',
        //         text: 'Data anda belum lengkap,Mohon dilengkapi',
        //         footer: '<h4>E.KOMUNIKASI ANTARA ALUMNI DENGAN POLTEKKES KEMENKES</h4>'
        //     })
        //         return false;
        //     }
        //     if (document.forms['frm'].development_of_competencies_and_institutions.value === "") {
        //         Swal.fire({icon: 'error',title: 'Oops...',
        //         text: 'Data anda belum lengkap,Mohon dilengkapi',
        //         footer: '<h4>E.KOMUNIKASI ANTARA ALUMNI DENGAN POLTEKKES KEMENKES</h4>'
        //     })
        //         return false;
        //     }

            return true;
    }
 </script>
@endpush
