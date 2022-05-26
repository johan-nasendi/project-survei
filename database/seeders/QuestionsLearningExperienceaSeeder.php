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
            'respondent_id' => 1,
            'what_study_program' => 'Farmasi',
            'college_entry_date'=> Carbon::create('2016', '06', '22'),
            'college_graduation_date'=> Carbon::create('2020', '05', '22'),
            'score_ipk' => '3,45',
            'organization' => 'Yes',
            'Active_inactive_organization' => 'Yes',
            'further_education_levels' => 'No',
            'educational_background' => 'Yes',
            'field_work' => 'Yes',
            'according' => 'Perkuliahan',
        ]);
        QuestionsLearningExperiencea::create([
            'respondent_id' => 2,
            'what_study_program' => 'Keperawatan',
            'college_entry_date'=> Carbon::create('2016', '06', '22'),
            'college_graduation_date'=> Carbon::create('2020', '05', '22'),
            'score_ipk' => '3,45',
            'organization' => 'Yes',
            'Active_inactive_organization' => 'Yes',
            'further_education_levels' => 'No',
            'educational_background' => 'Yes',
            'field_work' => 'Yes',
            'according' => 'Praktek kerja Lapangan/PKN',
        ]);
        QuestionsLearningExperiencea::create([
            'respondent_id' => 3,
            'what_study_program' => 'Keperawatan Gigi',
            'college_entry_date'=> Carbon::create('2016', '06', '22'),
            'college_graduation_date'=> Carbon::create('2020', '05', '22'),
            'score_ipk' => '3,45',
            'organization' => 'Yes',
            'Active_inactive_organization' => 'Yes',
            'further_education_levels' => 'No',
            'educational_background' => 'Yes',
            'field_work' => 'Yes',
            'according' => 'Praktik Klinik',
        ]);

        QuestionsLearningExperiencea::create([
            'respondent_id' => 4,
            'what_study_program' => 'Analis Kesehatan',
            'college_entry_date'=> Carbon::create('2016', '06', '22'),
            'college_graduation_date'=> Carbon::create('2020', '05', '22'),
            'score_ipk' => '3,45',
            'organization' => 'Yes',
            'Active_inactive_organization' => 'Yes',
            'further_education_levels' => 'No',
            'educational_background' => 'Yes',
            'field_work' => 'Yes',
            'according' => 'Magang',
        ]);
    }
}
