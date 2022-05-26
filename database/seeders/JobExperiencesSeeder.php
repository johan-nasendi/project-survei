<?php

namespace Database\Seeders;

use App\Models\JobExperiences;
use Illuminate\Database\Seeder;

class JobExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobExperiences::create([
            'respondent_id' => 1,
            'works' => 'Yes',
            'start_work' => 'Sebelum lulus Kuliah',
            'jobs_reason' => '',
            'after_how_many_months_job' => '03',
            'get_str'=> '03',
            'amount_applied' => '03',
            'amount_response_to_applications' => '02',
            'amount_inviting_interviews' => '01',
            'how_to_find_a_job' => 'Melamar ke instansi',
            'workplace' => 'Swasta',
            'name_workplace' => 'Apotik',
            'job_educational_background' => 'Yes',
            'why_take_the_job' => 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.',
            'level_of_education' => 'Setingkat lebih tinggi',
            'relationship_study_work' => 'Sangat Kuat',
            'additional_competence' => 'Penguasaan Bahasa Inggris',
            'income_per_month' => '3500000 – 5000000',

           ]);

        JobExperiences::create([
            'respondent_id' => 2,
            'works' => 'Yes',
            'start_work' => 'Sebelum lulus Kuliah',
            'jobs_reason'=>'',
            'after_how_many_months_job' => '04',
            'get_str'=> '03',
            'amount_applied' => '04',
            'amount_response_to_applications' => '04',
            'amount_inviting_interviews' => '04',
            'how_to_find_a_job' => 'Melamar ke instansi',
            'workplace' => 'Swasta',
            'name_workplace' => 'Apotik',
            'job_educational_background' => 'Yes',
            'why_take_the_job' => 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.',
            'level_of_education' => 'Setingkat lebih tinggi',
            'relationship_study_work' => 'Sangat Kuat',
            'additional_competence' => 'Penguasaan Bahasa Inggris',
            'income_per_month' => '3500000 – 5000000',

           ]);
        JobExperiences::create([
            'respondent_id' => 3,
            'works' => 'Yes',
            'start_work' => 'Sebelum lulus Kuliah',
            'jobs_reason'=>'',
            'after_how_many_months_job' => '04',
            'get_str'=> '03',
            'amount_applied' => '04',
            'amount_response_to_applications' => '04',
            'amount_inviting_interviews' => '04',
            'how_to_find_a_job' => 'Melamar ke instansi',
            'workplace' => 'Swasta',
            'name_workplace' => 'Apotik',
            'job_educational_background' => 'Yes',
            'why_take_the_job' => 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.',
            'level_of_education' => 'Setingkat lebih tinggi',
            'relationship_study_work' => 'Sangat Kuat',
            'additional_competence' => 'Penguasaan Bahasa Inggris',
            'income_per_month' => '3500000 – 5000000',

           ]);
        JobExperiences::create([
            'respondent_id' => 4,
            'works' => 'Yes',
            'start_work' => 'Sebelum lulus Kuliah',
            'jobs_reason'=>'',
            'after_how_many_months_job' => '04',
            'get_str'=> '03',
            'amount_applied' => '04',
            'amount_response_to_applications' => '04',
            'amount_inviting_interviews' => '04',
            'how_to_find_a_job' => 'Melamar ke instansi',
            'workplace' => 'Instansi Pemerintah',
            'name_workplace' => 'RS',
            'job_educational_background' => 'Yes',
            'why_take_the_job' => 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.',
            'level_of_education' => 'Setingkat lebih tinggi',
            'relationship_study_work' => 'Sangat Kuat',
            'additional_competence' => 'Penguasaan Bahasa Inggris',
            'income_per_month' => '3500000 – 5000000',

           ]);
    }
}
