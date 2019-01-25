@extends('layout')


@section('title')
    <h1>To Do Lists</h1>
@endsection


@section('content')


<ul class="main__thelists">
    @foreach ($todolists as $todolist)
        <li class="thelist">
            <div class="thelist__header">
                <h2 >     
                    <a class="thelist__header-title" href="/todolists/{{ $todolist->id}}">{{ $todolist->title }}</a>
                </h2> 
            </div>
            
                @include('listtasks')
        </li>
    @endforeach
</ul>

<a href="/todolists/create">Create a new list</a>
   
@endsection