<?php

namespace App\Policies;

use App\User;
use App\ToDoList;
use Illuminate\Auth\Access\HandlesAuthorization;

class ToDoListPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can update the to do list.
     *
     * @param  \App\User  $user
     * @param  \App\ToDoList  $toDoList
     * @return mixed
     */
    public function update(User $user, ToDoList $todolist)
    {
        return $todolist->owner_id == $user->id;

    }

   
}
