<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespondentIdentitiy extends Model
{
    use HasFactory;

    protected $table = "respondent";
    protected $primaryKey = 'id';
	protected $fillable = [
                            'name',
                            'place_of_birth',
                            'date_of_birth',
                            'gender',
                            'what_study_program',
                            'year_of_college_entry',
                            'college_graduation_date',
                            'email',
                            'mobile_phone_number',
                            'slug'
    ];


// relation Post data
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




    public function pertayaan()
    {
        return $this->belongsTo(QuestionsLearningExperiencea::class,'id','respondent_id');
    }

    public function pekerjaan()
    {
        return $this->belongsTo(JobExperiences::class,'id','respondent_id');
    }
    public function relasi()
    {
        return $this->belongsTo(RelationshipCompetence::class,'id','respondent_id');
    }






}
