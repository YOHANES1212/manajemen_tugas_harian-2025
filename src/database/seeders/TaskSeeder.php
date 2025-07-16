<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ngoding = Category::where('name', 'Ngoding')->first();
        $belanja = Category::where('name', 'Belanja')->first();

        Task::create([
            'title' => 'Buat halaman login',
            'description' => 'Login untuk aplikasi Laravel',
            'status' => 'pending',
            'category_id' => $ngoding->id,
        ]);

        Task::create([
            'title' => 'Beli beras dan minyak',
            'description' => 'Keperluan rumah tangga',
            'status' => 'in_progress',
            'category_id' => $belanja->id,
        ]);
    }
}
