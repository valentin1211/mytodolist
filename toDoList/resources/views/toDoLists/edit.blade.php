@extends('layout')


@section('title')
    <div class="header">
            <h1 class="heading-primary u-padding-left-medium">Edit Title</h1>
    </div>
@endsection


@section('content')

    <div class="main__bg">
        <form method="POST" action="/todolists/{{ $todolist->id }}">
            @csrf
            {{ method_field('PATCH')}}    
            <input type="text" name='title' placeholder="Enter a title" value="{{ $todolist->title }}">
            
            <button type='submit'>Submit changes</button>
    
        </form> 
    </div>    
    

@endsection