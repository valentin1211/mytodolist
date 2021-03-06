<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    protected $fillable = ['title', 'owner_id'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($attributes )
    {
        $this->tasks()->create($attributes );
        
    }

    
}
