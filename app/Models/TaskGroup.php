<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskGroup extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
