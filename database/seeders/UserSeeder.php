<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['email' => 'admin@example.com',],[
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('mEf$ad&mi%n#123'),
            'email_verified_at' => now(),
            'profile' => 'NA',
            'remember_token' => Str::random(10),
        ]);
    }
}
