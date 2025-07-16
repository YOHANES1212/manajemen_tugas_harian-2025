<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckoutQueue extends Model
{
    protected $fillable = ['task_id', 'queued_at'];


    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
