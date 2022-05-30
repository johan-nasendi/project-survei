<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespondentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respondent')->insert([
            'question_id' => 1,
            'job_id' => 1,
            'relation_id' => 1,
            'alumni_id' => 1,
           'name' => 'Josua Buay',
           'slug' => 'josua-buay',
           'place_of_birth' =>  'Jayapura',
           'date_of_birth' => Carbon::create('2000', '01', '01'),
           'gender' => 'Pria',
           'email' => 'josua@mail.com',
           'mobile_phone_number' => '081212131012',
           'created_at' => NOW(),
           'updated_at' => NOW()
           ]);

        DB::table('respondent')->insert([
           'question_id' => 2,
           'job_id' => 2,
           'relation_id' => 2,
           'alumni_id' => 2,
           'name' => 'Matha Doas',
           'slug' => 'matha-doas',
           'place_of_birth' =>  'Sarmi',
           'date_of_birth' => Carbon::create('1997', '03', '22'),
           'gender' => 'Wanita',
           'email' => 'martha@mail.com',
           'mobile_phone_number' => '081212131013',
           'created_at' => NOW(),
           'updated_at' => NOW()
           ]);

        DB::table('respondent')->insert([
           'question_id' => 3,
           'job_id' => 3,
           'relation_id' => 3,
           'alumni_id' => 3,
           'name' => 'Dorlina Sampar',
           'slug' => 'dorlina-sampar',
           'place_of_birth' =>  'Sentani',
           'date_of_birth' => Carbon::create('1997', '08', '29'),
           'gender' => 'Wanita',
           'email' => 'lina@mail.com',
           'mobile_phone_number' => '081212131014',
           'created_at' => NOW(),
           'updated_at' => NOW()
           ]);

        DB::table('respondent')->insert([
           'question_id' => 4,
           'job_id' => 4,
           'relation_id' => 4,
           'alumni_id' => 4,
           'name' => 'Felipus Tegai',
           'slug' => 'felipus-tegai',
           'place_of_birth' =>  'Biak',
           'date_of_birth' => Carbon::create('1998', '09', '09'),
           'gender' => 'Pria',
           'email' => 'felix@mail.com',
           'mobile_phone_number' => '081212131015',
           'created_at' => NOW(),
           'updated_at' => NOW()
           ]);

    }
}