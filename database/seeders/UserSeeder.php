<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Harris Putra Rifai',
            'username'=> 'harrisputra',
            'email'=> 'harrisputra@gmail.com',
            'email_verified_at'=> now(),
            'password'=> Hash::make('password'),
            'remember_token'=> Str::random(10)
        ]);
        User::factory(10)->create();
    }
}
