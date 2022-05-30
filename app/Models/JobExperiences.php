<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobExperiences extends Model
{
    use HasFactory;
    protected $table = "job_experiences";
    protected $fillable = [
        'respondent_id',
        'works',
        'start_work',
        'jobs_reason',
        'after_how_many_months_job',
        'get_str',
        'amount_applied',
        'amount_response_to_applications',
        'amount_inviting_interviews',
        'how_to_find_a_job',
        'workplace',
        'name_workplace',
        'job_educational_background',
        'why_take_the_job',
        'level_of_education',
        'relationship_study_work',
        'additional_competence',
        'income_per_month',
];


    public function edentity()
    {
         return $this->hasMany(RespondentIdentitiy::class,'id');
    }
}
