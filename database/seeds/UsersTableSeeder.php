<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Emmanuel Okose',
            'email' => 'Emmanuel@gmail.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}