<?php

namespace App\Exports;

use App\Models\JobExperiences;
use App\Models\RelationshipCompetence;
use App\Models\RespondentIdentitiy;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class TransactionExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  RespondentIdentitiy::with('pertayaan','pekerjaan','relasi','alumni')->get();

        ;
    }

    public function map($respondent) : array {
        return [

            $respondent->name,
            $respondent->place_of_birth,
            $respondent->date_of_birth,
            $respondent->gender,
            $respondent->email,
            $respondent->mobile_phone_number,

            $respondent->pertayaan->what_study_program,
            $respondent->pertayaan->college_entry_date,
            $respondent->pertayaan->what_study_program,
            $respondent->pertayaan->college_graduation_date,
            $respondent->pertayaan->score_ipk,
            $respondent->pertayaan->organization,
            $respondent->pertayaan->active_inactive_organization,
            $respondent->pertayaan->further_education_levels,
            $respondent->pertayaan->educational_background,
            $respondent->pertayaan->field_work,
            $respondent->pertayaan->according,

            $respondent->pekerjaan->works,
            $respondent->pekerjaan->start_work,
            $respondent->pekerjaan->jobs_reason,
            $respondent->pekerjaan->after_how_many_months_job,
            $respondent->pekerjaan->get_str,
            $respondent->pekerjaan->amount_applied,
            $respondent->pekerjaan->amount_response_to_applications,
            $respondent->pekerjaan->amount_inviting_interviews,
            $respondent->pekerjaan->how_to_find_a_job,
            $respondent->pekerjaan->workplace,
            $respondent->pekerjaan->name_workplace,
            $respondent->pekerjaan->job_educational_background,
            $respondent->pekerjaan->why_take_the_job,
            $respondent->pekerjaan->level_of_education,
            $respondent->pekerjaan->relationship_study_work,
            $respondent->pekerjaan->additional_competence,
            $respondent->pekerjaan->income_per_month,

            $respondent->relasi->curriculum_compatibility_jobs,
            $respondent->relasi->health_polytechnic_Competence,
            $respondent->relasi->competency_mastered,
            $respondent->relasi->competencies_required_job,
            $respondent->relasi->competency_improvement_needs,

            $respondent->alumni->alumni_association,
            $respondent->alumni->fb,
            $respondent->alumni->ig,
            $respondent->alumni->linkend,
            $respondent->alumni->cooperation_institutions_alumni_associations,
            $respondent->alumni->development_of_competencies_and_institutions,

            Carbon::parse($respondent->created_at)->toFormattedDateString()
        ];
    }

    public function headings() : array {
        return [
           'Nama Lengkap :',
           'Tempat Lahir',
           'Tanggal Lahir',
           'Jenis Kelamin',
           'Email',
           'NO Hp',

           'Lulus dari program studi ',
           'Masuk Kuliah',
           'Lulus Kuliah',
           'Nilai IPK',
           'Angg ORAGANISASI',
           'Selama kuliah, apakah anda menjadi anggota dari suatu organisasi',
           'Seberapa aktif anda di organisasi tersebut?',
           'ASetelah lulus dari Poltekkes, apakah anda melanjutkan pendidikan ke jenjang yang lebih tinggi',
           'apakah pendidikan yang diambil sesuai dengan latar belakang pendidikan anda di Poltekkes',
           'Jika anda sudah bekerja, apakah pendidikan yang diambil sesuai dengan bidang pekerjaan anda saat ini?',
            'Menurut anda seberapa besar penekanan pada metode pembelajaran',

           'Apakah anda sudah bekerja saat ini',
           'Kapan anda mulai mencari pekerjaan?',
           'AApa alasan utama anda tidak mencari pekerjaan setelah lulus kuliah?',
           'Berapa bulan setelah lulus anda memperoleh pekerjaan pertama?',
           'Berapa bulan setelah keluar STR anda memeroleh pekerjaan pertama?',
           'Jumlah Instansi yang dilamar',
           'Jumlah instansi merespon lamaran',
           'Jumlah instansi yang mengundang wawancara',
           'Bagaimana anda mencari pekerjaan',
           'Instansi tempat anda bekerja',
           'Apa nama instansi tempat anda bekerja',
           'Apakah pekerjaan anda sesuai dengan latar belakang pendidikan',
           'Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda',
           'Tingkat pendidikan apa yang paling tepat untuk pekerjaan anda saat ini',
           'Seberapa erat hubungan antara bidang studi dengan pekerjaan anda',
           'menurut penilaian Saudara sejauh mana kompetensi tambahan',
           'Berapa rata- rata penghasilan anda per bulan',

           'Kesesuaian Kurikulum dengan dunia kerja',
           'Kesesuaian Kompetensi yang diperoleh di Poltekkes Kemenkes',
           'Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai',
           'Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan',
           'Kebutuhan peningkatan Kompetensi yang perlu ditambah pada kurikulum Prodi',


           'Keikutsertaan dalam Ikatan alumni Poltekkes',
           'Username Facebook',
           'Username Instagram',
           'Username Linkend',
           'Apakah kegiatan alumni sudah dirasakan memberikan kontribusi kepada pengembangan kompetensi dan institusi',
           'Kegiatan apa sajakah yang dirasakan perlu dikembangkan untuk menjalin kerjasama antara institusi dengan ikatan alumni?',

        ] ;
    }


}
