<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationshipCompetence extends Model
{
    use HasFactory;

    protected $table = "suggestion";
    protected $fillable = [
        'respondent_id',
        'learning_process',
        'curriculum',
        'student_admini_services',
        'facilities_infrastructure',
];



    public function edentity()
    {
         return $this->belongsTo(RespondentIdentitiy::class,'id');
    }



}
