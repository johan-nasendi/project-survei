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
        return  RespondentIdentitiy::with('pertayaan','pekerjaan','relasi')->get();

        ;
    }

    public function map($respondent) : array {
        return [

            $respondent->name,
            $respondent->place_of_birth,
            $respondent->gender,
            $respondent->email,
            $respondent->mobile_phone_number,
            $respondent->what_study_program,
            $respondent->year_of_college_entry,
            $respondent->college_graduation_date,

            $respondent->pertayaan->active_inactive_organization,
            $respondent->pertayaan->organization_name,
            $respondent->pertayaan->lecturer_ability,
            $respondent->pertayaan->lecturer_skills_practice,
            $respondent->pertayaan->rectors_service,
            $respondent->pertayaan->study_program_services,

            $respondent->pekerjaan->do_you_work,
            $respondent->pekerjaan->description,
            $respondent->pekerjaan->current_activities,
            $respondent->pekerjaan->start_work,
            $respondent->pekerjaan->workplace,
            $respondent->pekerjaan->name_workplace,
            $respondent->pekerjaan->address_work,
            $respondent->pekerjaan->job_educational_background,
            $respondent->pekerjaan->income_per_month,

            $respondent->relasi->learning_process,
            $respondent->relasi->curriculum,
            $respondent->relasi->student_admini_services,
            $respondent->relasi->facilities_infrastructure,

            Carbon::parse($respondent->created_at)->toFormattedDateString()
        ];
    }

    public function headings() : array {
        return [
           'Nama',
           'Tempat Lahir',
           'Jenis Kelamin',
           'Email',
           'NO Ponsel',
           'Jurusan/Prodi',
           'Tahun Masuk Kuliah',
           'Bulan & Tahub Lulus Kuliah',

           'Selama kuliah apakah anda pernah menjadi anggota suatu organisasi di dalam atau luar kampus? ',
           'Organisasi apa yang pernah anda ikut?',
           'Selama Kuliah, menurut saudara bagaimana kemampuan dosen dalam mengampu mata kuliah?',
           'Bagaimana ketrampilan dosen dan instruktur dalam memberikan praktek?',
           'Bagaimana pelayanan Rektorat dalam memberikan pengurusan administrasi mahasiswa?',
           'Bagaimana pelayanan Program studi dalam memberikan pengurusan administrasi mahasiswa?',

           'Apakah anda sudah bekerja?',
           'Dimana anda melanjutkan pendidikan(perguruan tinggi apa)?',
           'Apa kegiatan Anda saat sekarang?',
           'Jika Sudah dimana anda bekerja?',
           'Nama Instansi tempat bekerja? ',
           'Kapan Mulai Bekerja (bulan/tahun)?',
           'Apa nama instansi tempat anda bekerja',
           'Alamat tempat kerja? ',
           'Apakah pekerjaan anda sesuai dengan latar belakang pendidikan?',
           'Berapa gaji pertama anda? ',

           'Proses Belajar Mengajar',
           'Kurikulum',
           'Layanan Administrasi Kemahasiswaan',
           'Sarana dan Prasarana',

        ] ;
    }


}
