<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = ['completed', 'to_do_list_id', 'description'];
    
    public function todolist()
    {
        return $this->belongsTo(ToDoList::class, 'to_do_list_id');
    }

    public function complete($completed = true)     
    {
        $this->update(compact('completed'));
    }

    public function incomplete()
    {
        $this->complete(false);
    }
}
