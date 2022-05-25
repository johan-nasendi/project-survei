<?php

namespace Database\Seeders;

use App\Models\RespondentIdentitiy;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespondentIdentitiySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('respondent_identity')->insert([
        'name' => 'Josua Buay',
        'place_of_birth' =>  'Jayapura',
        'date_of_birth' => Carbon::create('2000', '01', '01'),
        'gender' => 'Male',
        'email' => 'josua@mail.com',
        'mobile_phone_number' => '081212131012',
        'created_at' => NOW(),
        'updated_at' => NOW()
        ]);

    }
}
