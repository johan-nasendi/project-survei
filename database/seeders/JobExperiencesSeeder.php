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
            'do_you_work' => 'Sudah',
            'start_work' => 'Juni 2022',
            'workplace' => 'Pemerintah',
            'name_workplace' => 'Rumah Sakit Yowari',
            'address_work' => 'Jl.Sentani-Hawai.No.79 RT/RW 002/003',
            'job_educational_background' => 'Sesuai' ,
            'income_per_month' => '3500000',
           ]);

        JobExperiences::create([
            'respondent_id' => 2,
            'do_you_work' => 'Sudah',
            'start_work' => 'Juni 2022',
            'workplace' => 'Pemerintah',
            'name_workplace' => 'Rumah Sakit Yowari',
            'address_work' => 'Jl.Sentani-Hawai.No.79 RT/RW 002/003',
            'job_educational_background' => 'Sesuai' ,
            'income_per_month' => '3500000',
           ]);

        JobExperiences::create([
            'respondent_id' => 3,
            'do_you_work' => 'Sudah',
            'start_work' => 'Juni 2022',
            'workplace' => 'Pemerintah',
            'name_workplace' => 'Rumah Sakit Yowari',
            'address_work' => 'Jl.Sentani-Hawai.No.79 RT/RW 002/003',
            'job_educational_background' => 'Sesuai' ,
            'income_per_month' => '3500000',
           ]);

        JobExperiences::create([
            'respondent_id' => 4,
            'do_you_work' => 'Sudah',
            'start_work' => 'Juni 2022',
            'workplace' => 'Pemerintah',
            'name_workplace' => 'Rumah Sakit Yowari',
            'address_work' => 'Jl.Sentani-Hawai.No.79 RT/RW 002/003',
            'job_educational_background' => 'Sesuai' ,
            'income_per_month' => '3500000',
           ]);

    }
}
