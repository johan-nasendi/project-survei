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
            'name' => 'Johan Nasendi',
            'username' => 'johan.nasendi',
            'email' => 'johannasendi@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
        $user->attachRole('admin');
    }
}
