<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespondentIdentitiy extends Model
{
    use HasFactory;

    protected $table = "respondent_identity";
	protected $fillable = [
                            'name',
                            'place_of_birth',
                            'date_of_birth',
                            'gender',
                            'email',
                            'mobile_phone_number',
                            'slug'
    ];

    public function jobex()
    {
        return $this->hasMany(JobExperiences::class,'respondent_id');
    }
    public function questions()
    {
        return $this->hasMany(QuestionsLearningExperiencea::class,'respondent_id');
    }
    public function relastionship()
    {
        return $this->hasMany(RelationshipCompetence::class,'respondent_id');
    }
    public function alumniComunication()
    {
        return $this->hasMany(AlumniComunitacionBetween::class,'respondent_id');
    }



}
