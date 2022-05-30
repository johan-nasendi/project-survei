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
            'alumni_association' => 'Yes',
            'fb' => 'johan.nasendi',
            'ig' => 'johan.nasendi',
            'linkend' => 'johan.nasendi',
            'development_of_competencies_and_institutions' => 'Sudah',
            'cooperation_institutions_alumni_associations' => 'Reuni',
        ]);
        AlumniComunitacionBetween::create([
            'alumni_association' => 'Yes',
            'fb' => 'johan.nasendi',
            'ig' => 'theis.andatu',
            'linkend' => 'johan.nasendi',
            'development_of_competencies_and_institutions' => 'Sudah',
            'cooperation_institutions_alumni_associations' => 'Pengabdian',
        ]);
        AlumniComunitacionBetween::create([
            'alumni_association' => 'Yes',
            'fb' => 'johan.nasendi',
            'ig' => 'janzen.faidiban',
            'linkend' => 'johan.nasendi',
            'development_of_competencies_and_institutions' => 'Sudah',
            'cooperation_institutions_alumni_associations' => 'Pelatihan',
        ]);
        AlumniComunitacionBetween::create([
            'alumni_association' => 'Yes',
            'fb' => 'johan.nasendi',
            'ig' => 'iambobbybale',
            'linkend' => 'johan.nasendi',
            'development_of_competencies_and_institutions' => 'Sudah',
            'cooperation_institutions_alumni_associations' => 'Seminar',
        ]);
    }
}
