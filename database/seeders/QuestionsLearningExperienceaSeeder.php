<?php

namespace Database\Seeders;

use App\Models\QuestionsLearningExperiencea;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class QuestionsLearningExperienceaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionsLearningExperiencea::create([
            'what_study_program' => 'Farmasi',
            'college_entry_date'=> Carbon::create('2016', '06', '22'),
            'college_graduation_date'=> Carbon::create('2020', '05', '22'),
            'score_ipk' => '3,45',
            'organization' => 'Yes',
            'active_inactive_organization' => 'Tidak Aktif',
            'further_education_levels' => 'No',
            'educational_background' => 'Yes',
            'field_work' => 'Yes',
            'according' => 'Perkuliahan',
        ]);
        QuestionsLearningExperiencea::create([
            'what_study_program' => 'Keperawatan',
            'college_entry_date'=> Carbon::create('2016', '06', '22'),
            'college_graduation_date'=> Carbon::create('2020', '05', '22'),
            'score_ipk' => '3,45',
            'organization' => 'Yes',
            'active_inactive_organization' => 'Sangat Aktif',
            'further_education_levels' => 'No',
            'educational_background' => 'Yes',
            'field_work' => 'Yes',
            'according' => 'Praktek kerja Lapangan',
        ]);
        QuestionsLearningExperiencea::create([
            'what_study_program' => 'Keperawatan Gigi',
            'college_entry_date'=> Carbon::create('2016', '06', '22'),
            'college_graduation_date'=> Carbon::create('2020', '05', '22'),
            'score_ipk' => '3,45',
            'organization' => 'Yes',
            'active_inactive_organization' => 'Pasif',
            'further_education_levels' => 'No',
            'educational_background' => 'Yes',
            'field_work' => 'Yes',
            'according' => 'Praktik Klinik',
        ]);

        QuestionsLearningExperiencea::create([
            'what_study_program' => 'Analis Kesehatan',
            'college_entry_date'=> Carbon::create('2016', '06', '22'),
            'college_graduation_date'=> Carbon::create('2020', '05', '22'),
            'score_ipk' => '3,45',
            'organization' => 'Yes',
            'active_inactive_organization' => 'Cukup Aktif',
            'further_education_levels' => 'No',
            'educational_background' => 'Yes',
            'field_work' => 'Yes',
            'according' => 'Magang',
        ]);
    }
}
