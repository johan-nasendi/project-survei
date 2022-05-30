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
            'curriculum_compatibility_jobs' => 'Sangat Sesuai',
            'health_polytechnic_Competence' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competency_mastered' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competencies_required_job' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competency_improvement_needs' => 'Kemampuan berbahasa inggris',
        ]);

        RelationshipCompetence::create([
            'curriculum_compatibility_jobs' => 'Tidak Sesuai',
            'health_polytechnic_Competence' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competency_mastered' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competencies_required_job' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competency_improvement_needs' => 'Kemampuan berbahasa inggris',
        ]);
        RelationshipCompetence::create([
            'curriculum_compatibility_jobs' => 'Kurang Sesuai',
            'health_polytechnic_Competence' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competency_mastered' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competencies_required_job' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competency_improvement_needs' => 'Kemampuan berbahasa inggris',
        ]);
        RelationshipCompetence::create([
            'curriculum_compatibility_jobs' => 'Sangat',
            'health_polytechnic_Competence' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competency_mastered' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competencies_required_job' => 'Pengetahuan di bidang atau disiplin ilmu',
            'competency_improvement_needs' => 'Kemampuan berbahasa inggris',
        ]);
    }
}
