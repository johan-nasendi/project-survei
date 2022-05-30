<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniComunitacionBetween extends Model
{
    use HasFactory;

    protected $table = "alumni_comunitacion";
    protected $fillable = [
        'respondent_id',
        'alumni_association',
        'fb',
        'ig',
        'linkend',
        'cooperation_institutions_alumni_associations',
        'development_of_competencies_and_institutions',
];


    public function edentity()
    {
         return $this->hasMany(RespondentIdentitiy::class,'id');
    }

}
