<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            ['id' => 1, 'name' =>'Model', 'description' =>'Part of the MVC software architecture that handles the data-related logic.'],
            ['id' => 2, 'name' =>'View', 'description' =>'Part of the MVC software architecture that handles the UI-related logic.'],
            ['id' => 3, 'name' =>'Controller', 'description' =>'Part of the MVC software architecture that handles the business logic and acts as an interface between the model and the view. It handles the functions.'],
            ['id' => 4, 'name' =>'Routes', 'description' =>'Handles and creates the URL requests. It is initialized in the web.php file'],
            ['id' => 5, 'name' =>'Middleware', 'description' =>'A convenient mechanism that inspect and filters HTTP request. Creates more security and access control.'],
            ['id' => 6, 'name' =>'Blade Templates', 'description' =>'A templating engine that provides dynamic view to the user. It is compiled in plain PHP and allows developers to use PHP directly into HTML files'],
            ['id' => 7, 'name' =>'Migrations', 'description' =>'Allows the creation and handling of database within the PHP file. It allows collaborators to have the same database structure.'],
            ['id' => 8, 'name' =>'Seeders', 'description' =>'Seeder are instructions that can easily populate and insert data into a database.'],
            ['id' => 9, 'name' =>'Database', 'description' =>'A database is an organized collection of structured information, or data, typically stored electronically in a computer system. It is accessed by the model while being elegantly handled by Eloquent ORM'],
            ['id' => 10, 'name' =>'Eloquent ORM', 'description' =>'Allows efficient interaction between model and database as it automates the generation of SQL. It has database abstraction.']
        ]);
    }
}
