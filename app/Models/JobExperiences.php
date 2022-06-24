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
        'do_you_work',
        'start_work',
        'workplace',
        'description',
        'current_activities',
        'name_workplace',
        'address_work',
        'job_educational_background',
        'income_per_month',
];


    public function edentity()
    {
         return $this->belongsTo(RespondentIdentitiy::class,'id');
    }

}
