<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        // Tambahkan field lain jika ada
    ];

    public function relatedTasks()
    {
        return $this->belongsToMany(Task::class, 'task_relations', 'task_id', 'related_task_id');
    }

    public function histories()
    {
        return $this->hasMany(TaskHistory::class);
    }
}
