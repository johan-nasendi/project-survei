<?php

namespace Database\Seeders;

use App\Models\AlumniComunitacionBetween;
use Illuminate\Database\Seeder;

class AlumniComunitacionBetweenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlumniComunitacionBetween::create([
            'respondent_id' => 1,
            'alumni_association' => 'Yes',
            'fb' => 'johan.nasendi',
            'ig' => 'johan.nasendi',
            'linkend' => 'johan.nasendi',
            'development_of_competencies_and_institutions' => 'Sudah',
            'cooperation_institutions_alumni_associations' => 'Reuni',
        ]);
        AlumniComunitacionBetween::create([
            'respondent_id' => 2,
            'alumni_association' => 'Yes',
            'fb' => 'johan.nasendi',
            'ig' => 'theis.andatu',
            'linkend' => 'johan.nasendi',
            'development_of_competencies_and_institutions' => 'Sudah',
            'cooperation_institutions_alumni_associations' => 'Pengabdian',
        ]);
        AlumniComunitacionBetween::create([
            'respondent_id' => 3,
            'alumni_association' => 'Yes',
            'fb' => 'johan.nasendi',
            'ig' => 'janzen.faidiban',
            'linkend' => 'johan.nasendi',
            'development_of_competencies_and_institutions' => 'Sudah',
            'cooperation_institutions_alumni_associations' => 'Pelatihan',
        ]);
        AlumniComunitacionBetween::create([
            'respondent_id' => 4,
            'alumni_association' => 'Yes',
            'fb' => 'johan.nasendi',
            'ig' => 'iambobbybale',
            'linkend' => 'johan.nasendi',
            'development_of_competencies_and_institutions' => 'Sudah',
            'cooperation_institutions_alumni_associations' => 'Seminar',
        ]);
    }
}
