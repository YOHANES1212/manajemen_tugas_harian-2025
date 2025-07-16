<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskHistory extends Model
{
    protected $fillable = ['task_id', 'note'];


    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
