<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniComunitacionBetween extends Model
{
    use HasFactory;

    protected $table = "alumni_comunitacion_between";
    protected $fillable = [
        'respondent_id',
        'alumni_association',
        'fb',
        'ig',
        'linkend',
        'development_of_competencies_and_institutions',
        'cooperation_institutions_alumni_associations',
];


    public function edentity()
    {
         return $this->hasMany(RespondentIdentitiy::class,'id');
    }
}
