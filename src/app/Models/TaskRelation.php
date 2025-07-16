<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskRelation extends Model
{
    protected $fillable = ['task_id', 'related_task_id'];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
