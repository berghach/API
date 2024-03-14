<?php

namespace Database\Seeders;

use App\Models\TaskList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'To Do'],
            ['title' => 'Doing'],
            ['title' => 'Done']
        ];

        foreach($data as $D){
            TaskList::create($D);
        }
    }
}
