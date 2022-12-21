<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name'=>'Dilan',
            'email'=>'dilan@gmail.com',
            'password'=>bcrypt('12345678'),
        ])->assignRole('Admin');

        User::create([
            'name'=>'Felipe',
            'email'=>'felipen@gmail.com',
            'password'=>bcrypt('12345678'),
        ])->assignRole('Blogger');

        User::factory(8)->create();
    }
}
