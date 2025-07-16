<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\TaskRelation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            TaskSeeder::class,
            CheckoutQueueSeeder::class,
            TaskHistorySeeder::class,
            TaskRelation::class,
        ]);   
    }
}
