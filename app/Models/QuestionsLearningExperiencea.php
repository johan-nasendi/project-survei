<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsLearningExperiencea extends Model
{
    use HasFactory;

    protected $table = "pbm_experience";
    protected $fillable = [
        'respondent_id',
        'organization_name',
        'active_inactive_organization',
        'lecturer_ability',
        'lecturer_skills_practice',
        'rectors_service',
        'study_program_services',
];


    public function edentity()
    {
         return $this->belongsTo(RespondentIdentitiy::class,'id');
    }


    // public function idn()
    // {
    //      return $this->hasMany(RespondentIdentitiy::class,'id');
    // }




}
