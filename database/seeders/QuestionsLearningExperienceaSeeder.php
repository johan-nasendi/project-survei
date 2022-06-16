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
            'active_inactive_organization' => 'Ya',
            'organization_name' => 'BEM',
            'lecturer_ability' => 'Baik',
            'lecturer_skills_practice' => 'Baik',
            'rectors_service' => 'Baik',
            'study_program_services' => 'Baik',
        ]);
        QuestionsLearningExperiencea::create([
            'respondent_id' => 2,
            'active_inactive_organization' => 'Ya',
            'organization_name' => 'HMJ',
            'lecturer_ability' => 'Sangat baik',
            'lecturer_skills_practice' => 'Sangat baik',
            'rectors_service' => 'Baik',
            'study_program_services' => 'Baik',
        ]);
        QuestionsLearningExperiencea::create([
            'respondent_id' => 3,
            'active_inactive_organization' => 'Ya',
            'organization_name' => 'UKM',
            'lecturer_ability' => 'Cukup',
            'lecturer_skills_practice' => 'Cukup',
            'rectors_service' => 'Kurang',
            'study_program_services' => 'Kurang',
        ]);
        QuestionsLearningExperiencea::create([
            'respondent_id' => 4,
            'active_inactive_organization' => 'Ya',
            'organization_name' => 'Lainnya',
            'lecturer_ability' => 'Baik',
            'lecturer_skills_practice' => 'Baik',
            'rectors_service' => 'Kurang',
            'study_program_services' => 'Baik',
        ]);

    }
}
