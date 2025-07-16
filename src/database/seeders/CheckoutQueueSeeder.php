<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CheckoutQueue;
use App\Models\Task;

class CheckoutQueueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = Task::first(); // ambil task pertama

        if ($task) {
            CheckoutQueue::create([
                'task_id' => $task->id,
                'queued_at' => now(),
            ]);
        }
    }
}
