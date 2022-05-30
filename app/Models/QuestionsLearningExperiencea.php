<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsLearningExperiencea extends Model
{
    use HasFactory;

    protected $table = "questions_learning";
    protected $fillable = [
        'respondent_id',
        'what_study_program',
        'college_entry_date',
        'college_graduation_date',
        'score_ipk',
        'organization',
        'active_inactive_organization',
        'further_education_levels',
        'educational_background',
        'field_work',
        'according',
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
