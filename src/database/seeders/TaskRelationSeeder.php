<?php

namespace Database\Seeders;

use App\Models\TaskRelation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskRelation::create([
            'task_id' => 1,
            'related_task_id' => 2,
        ]);
    }
}
