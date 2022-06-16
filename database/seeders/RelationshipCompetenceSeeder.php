<?php

namespace Database\Seeders;

use App\Models\RelationshipCompetence;
use Illuminate\Database\Seeder;

class RelationshipCompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RelationshipCompetence::create([
            'respondent_id' => 1,
            'learning_process' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'curriculum' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'student_admini_services' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'facilities_infrastructure' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        RelationshipCompetence::create([
            'respondent_id' => 2,
            'learning_process' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'curriculum' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'student_admini_services' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'facilities_infrastructure' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        RelationshipCompetence::create([
            'respondent_id' => 3,
            'learning_process' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'curriculum' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'student_admini_services' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'facilities_infrastructure' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        RelationshipCompetence::create([
            'respondent_id' => 4,
            'learning_process' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'curriculum' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'student_admini_services' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'facilities_infrastructure' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);


    }
}
