<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(LaratrustSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RespondentIdentitiySeeder::class);
        $this->call(JobExperiencesSeeder::class);
        $this->call(QuestionsLearningExperienceaSeeder::class);
        $this->call(RelationshipCompetenceSeeder::class);
        $this->call(AlumniComunitacionBetweenSeeder::class);

    }
}
