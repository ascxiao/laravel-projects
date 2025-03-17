<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table()->insert() method inserts multiple records into a database table at once
        DB::table('skills')->insert([
            ['id' => 1, 'name' =>'PHP', 'description' =>'php hihihi'],
            ['id' => 2, 'name' =>'JaveScript', 'description' =>'javascript hihihi'],
            ['id' => 3, 'name' =>'MySQL', 'description' =>'my sql hihihi'],

        ]);
    }
}