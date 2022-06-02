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
        <div id="basicwizard">
            @include('layouts.component.nav-form')
            <form name="frm" action="{{route('forum.post')}}"   class="needs-validation was-validated" novalidate=""
            method="POST" enctype="multipart/form-data">
            @csrf

                <div class="tab-content b-0 mb-0 pt-0">
                    @include('layouts.component.content-form')
                </div> <!-- tab-content -->
            </form>
        </div> <!-- end #basicwizard-->

@stop

@push('js-external')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

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
        getSelectValue = document.getElementById("jobs_reason").value;
        if(getSelectValue == "1"){
            document.getElementById("hidden_textarea").style.display="block";
        } else {
            document.getElementById("hidden_textarea").style.display="none";
        }
    }

    function IsEmpty() {
     // Respondent
        if (document.forms['frm'].name.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Nama anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>A.IDENTITAS RESPONDEN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].email.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Email anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>A.IDENTITAS RESPONDEN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].mobile_phone_number.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'No handphone belum di isi, Mohon di lengkapi!',
            footer: '<h4>A.IDENTITAS RESPONDEN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].place_of_birth.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Tempat lahir anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>A.IDENTITAS RESPONDEN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].date_of_birth.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Tanggal anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>A.IDENTITAS RESPONDEN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].gender.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Jenis Kelamin anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>A.IDENTITAS RESPONDEN</h4>'
        })
            return false;
        }

        //questions
        if (document.forms['frm'].what_study_program.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Program Studi anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].college_entry_date.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Kapan anda masuk Kuliah belum di isi, Mohon di lengkapi!',
            footer: '<h4>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].college_graduation_date.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Kapan anda lulus kulia belum di isi, Mohon di lengkapi!',
            footer: '<h4>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].score_ipk.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Nilai IPK anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].organization.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Keorganisasian anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].active_inactive_organization.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Seberapa aktif anda di organisasi tersebut anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].further_education_levels.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Apakah anda melanjutkan pendidikan ke jenjang yang lebih tinggi belum di isi, Mohon di lengkapi!',
            footer: '<h4>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].educational_background.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Apakah pendidikan yang diambil sesuai dengan latar belakang pendidikan anda di Poltekkes? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].field_work.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Apakah pendidikan yang diambil sesuai dengan bidang pekerjaan anda saat ini? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h4>'
        })
            return false;
        }
        if (document.forms['frm'].according.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</h4>'
        })
            return false;
        }

        // RIWAYAT PEKERJAAN
        if (document.forms['frm'].works.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Apakah anda sudah bekerja saat ini ? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>C.RIWAYAT PEKERJAAN</h4>'
        })
            return false;
        }

        // KOMPETENSI DAN HUBUNGAN ANTARA PROGRAM STUDI DENGAN DUNIA KERJA
        if (document.forms['frm'].curriculum_compatibility_jobs.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Kesesuaian Kurikulum dengan dunia kerja? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>D.KOMPETENSI DAN HUBUNGAN ANTARA PROGRAM STUDI DENGAN DUNIA KERJA</h4>'
        })
            return false;
        }

        if (document.forms['frm'].health_polytechnic_Competence.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Kesesuaian Kompetensi yang diperoleh di Poltekkes Kemenkes berikut ini dalam melaksanakan pekerjaan anda? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>D.KOMPETENSI DAN HUBUNGAN ANTARA PROGRAM STUDI DENGAN DUNIA KERJA</h4>'
        })
            return false;
        }

        if (document.forms['frm'].competency_mastered.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>D.KOMPETENSI DAN HUBUNGAN ANTARA PROGRAM STUDI DENGAN DUNIA KERJA</h4>'
        })
            return false;
        }

        if (document.forms['frm'].competencies_required_job.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>D.KOMPETENSI DAN HUBUNGAN ANTARA PROGRAM STUDI DENGAN DUNIA KERJA</h4>'
        })
            return false;
        }

        if (document.forms['frm'].competency_improvement_needs.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Kebutuhan peningkatan Kompetensi yang perlu ditambah pada kurikulum Prodi ? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>D.KOMPETENSI DAN HUBUNGAN ANTARA PROGRAM STUDI DENGAN DUNIA KERJA</h4>'
        })
            return false;
        }

        // KOMUNIKASI ANTARA ALUMNI DENGAN POLTEKKES KEMENKES
        if (document.forms['frm'].alumni_association.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Keikutsertaan dalam Ikatan alumni Poltekkes? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>E.KOMUNIKASI ANTARA ALUMNI DENGAN POLTEKKES KEMENKES</h4>'
        })
            return false;
        }
        if (document.forms['frm'].cooperation_institutions_alumni_associations.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Apakah kegiatan alumni sudah dirasakan memberikan kontribusi kepada pengembangan kompetensi dan institusi? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>E.KOMUNIKASI ANTARA ALUMNI DENGAN POLTEKKES KEMENKES</h4>'
        })
            return false;
        }
        if (document.forms['frm'].development_of_competencies_and_institutions.value === "") {
            Swal.fire({icon: 'error',title: 'Oops...',
            text: 'Kegiatan apa sajakah yang dirasakan perlu dikembangkan untuk menjalin kerjasama antara institusi dengan ikatan alumni? anda belum di isi, Mohon di lengkapi!',
            footer: '<h4>E.KOMUNIKASI ANTARA ALUMNI DENGAN POLTEKKES KEMENKES</h4>'
        })
            return false;
        }

        return true;
    }


    </script>
@endpush
