<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Poltekses Jayapura',
            'slug' => 'poltekses-jayapura',
            'email' => 'adminpoliteknikkesehatanjpr@gmail.com',
            'password' => bcrypt('@admin123.Poltekses'),
        ]);
        $user->attachRole('admin');
    }
}
