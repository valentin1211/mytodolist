@extends('layout')


@section('content')

    <h1>Edit To Do List</h1>
    
    <form method="POST" action="/todolists/{{ $todolist->id }}">
        @csrf
        {{ method_field('PATCH')}}
       
        <label for="title">Edit Title</label>

        <input type="text" name='title' placeholder="Enter a title" value="{{ $todolist->title }}">
        
        <button type='submit'>Edit the toDoList</button>

    </form>

    <form method="POST" action="/todolists/{{$todolist->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete my project</button>

    </form>
@endsection