<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskGroup extends Model
{
    /**
     * Get all the tasks associated with this group
     */
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
