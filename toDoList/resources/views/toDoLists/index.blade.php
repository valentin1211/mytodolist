@extends('layout')


@section('content')

<h1>To Do Lists</h1>

<ul>
    @foreach ($toDoLists as $todolist)
        <li> 
            <a href="/todolists/{{ $todolist->id}}">
              {{ $todolist->title }}
            </a>
        </li>
    @endforeach
</ul>

<a href="/todolists/create">Create a new list</a>
   
@endsection