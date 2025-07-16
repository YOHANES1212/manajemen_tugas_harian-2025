<?php

namespace Database\Seeders;

use App\Models\TaskHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskHistory::create([
            'task_id' => 1,
            'action' => 'created',
            'snapshot' => json_encode(['title' => 'Buat halaman login']),
        ]);
    }
}
