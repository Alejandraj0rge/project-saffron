<?php

use Illuminate\Database\Seeder;
use App\Models\Tasks;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        Tasks::insert([
            [
                'title' => 'Create database',
                'content' =>'Create migrations and models'
            ],

            [
                'title' => 'Create Api routes',
                'content' =>'Create Api routes with resourceful routes'
            ],

            [
                'title' => 'Run tests',
                'content' =>'Run tests for Api routes'
            ],

            [
                'title' => 'Controller',
                'content' =>'Make controller for the tasks and add elements according to CRUD'
            ],

            [
                'title' => 'Interface',
                'content' =>'Place elements for interface and configure api routes to work with the views'
            ],
            

        ]);
    }
}
