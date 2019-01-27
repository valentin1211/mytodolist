@extends('layout')


@section('title')
    <div class="header">
            <h1 class="heading-primary u-padding-left-medium">Manage my list</h1>
    </div>
@endsection


@section('content')

    


    <div class="main__show">
        <div class="thelist">
            <div class="thelist__header">
                <h2 class="thelist__header-title" >{{ $todolist->title }}</h2>
            </div>   
            @include('listtasks')

            {{-- add a new task --}}
            <form action="/todolists/{{ $todolist->id }}/tasks" method="post">
                @csrf

                <input type="text" name="description">
                <input type="submit" value="create a new task">
                

            </form>
            @include('errors')
    
        </div>
        <br>

        <a class="btn btn--white" href="/todolists/{{$todolist->id}}/edit"> Edit list name</a>
        <form style="display:inline-block" method="POST" action="/todolists/{{$todolist->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn--red" type="submit">Delete my project</button>
        </form>
        
    </div>
    


    

    
   
@endsection