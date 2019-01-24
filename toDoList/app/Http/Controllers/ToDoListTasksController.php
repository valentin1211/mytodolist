<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\ToDoList;

class ToDoListTasksController extends Controller
{
    public function store(ToDoList $todolist)
    {
        $attributes = request()->validate([
            'description' => ['required', 'min:5', 'max:50']
        ]);
        $todolist->addTask($attributes );
        return back();
    }


    public function update(Task $task)
    {

        if (request()->has('completed')) {
            $task->complete();  
        }
        else{
            $task->incomplete();
        }

        return back();
    }

    
}
