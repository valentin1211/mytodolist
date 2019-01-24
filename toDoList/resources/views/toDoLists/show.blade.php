@extends('layout')


@section('content')

    <h1> {{$todolist->title}} </h1>

    <a href="/todolists/{{$todolist->id}}/edit"> Edit My List </a>
    <form method="POST" action="/todolists/{{$todolist->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete my project</button>

    </form>

    @if ($todolist->tasks->count())
        <ul>

            @foreach ($todolist->tasks as $task)
               
                <li>
                    <form action="/tasks/{{ $task->id }}" method="POST" >
                        @method("PATCH")
                        @csrf
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? "checked" : "" }}>
                        {{ $task->description }}
                    </form>

                </li>
            @endforeach

        </ul>
    @else
        <p>You dont have any tasks.</p>
    @endif

    {{-- add a new task --}}
    <form action="/todolists/{{ $todolist->id }}/tasks" method="post">
        @csrf

        <input type="text" name="description">
        <input type="submit" value="create a new task">
        

    </form>
    @include('errors')
    
   
@endsection