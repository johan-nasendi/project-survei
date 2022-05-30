<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationshipCompetence extends Model
{
    use HasFactory;

    protected $table = "relationship";
    protected $fillable = [
        'respondent_id',
        'curriculum_compatibility_jobs',
        'health_polytechnic_Competence',
        'competency_mastered',
        'competencies_required_job',
        'competency_improvement_needs',
];



    public function edentity()
    {
         return $this->hasMany(RespondentIdentitiy::class,'id');
    }

}
