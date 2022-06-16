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
           'name' => 'Josua Buay',
           'slug' => 'josua-buay',
           'place_of_birth' =>  'Jayapura',
           'date_of_birth' => Carbon::create('2000', '01', '01'),
           'gender' => 'Pria',
           'email' => 'josua@mail.com',
           'mobile_phone_number' => '081212131012',
           'what_study_program' => 'DIII Gizi',
           'year_of_college_entry' => '2018',
           'college_graduation_date' => 'Juni 2021',
           'created_at' => NOW(),
           'updated_at' => NOW()
           ]);

        DB::table('respondent')->insert([
           'name' => 'Luckman Said',
           'slug' => 'luckman-said',
           'place_of_birth' =>  'Biak',
           'date_of_birth' => Carbon::create('1998', '01', '01'),
           'gender' => 'Pria',
           'email' => 'luck01@mail.com',
           'mobile_phone_number' => '081212131013',
           'what_study_program' => 'DIII Keperawatan Yapen',
           'year_of_college_entry' => '2016',
           'college_graduation_date' => 'Juni 2019',
           'created_at' => NOW(),
           'updated_at' => NOW()
           ]);

        DB::table('respondent')->insert([
           'name' => 'Mawar Bazar',
           'slug' => 'mawar-bazar',
           'place_of_birth' =>  'Maluku',
           'date_of_birth' => Carbon::create('2000', '01', '11'),
           'gender' => 'Wanita',
           'email' => 'mawarmerah@mail.com',
           'mobile_phone_number' => '081212131014',
           'what_study_program' => 'DIII Sanitasi Jayapura',
           'year_of_college_entry' => '2018',
           'college_graduation_date' => 'Juni 2021',
           'created_at' => NOW(),
           'updated_at' => NOW()
           ]);

        DB::table('respondent')->insert([
           'name' => 'Merpati Suana',
           'slug' => 'merpati-suana',
           'place_of_birth' =>  'Ambom',
           'date_of_birth' => Carbon::create('2000', '01', '11'),
           'gender' => 'Wanita',
           'email' => 'merpatiputih@mail.com',
           'mobile_phone_number' => '081212131015',
           'what_study_program' => 'DIII Sanitasi Mimika',
           'year_of_college_entry' => '2018',
           'college_graduation_date' => 'Juni 2021',
           'created_at' => NOW(),
           'updated_at' => NOW()
           ]);

    }
}
