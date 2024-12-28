<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            ['name' => 'Buy groceries', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finish the project', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Plan meeting', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Go to the gym', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Clean the house', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}