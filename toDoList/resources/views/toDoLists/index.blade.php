@extends('layout')


@section('title')
    <div class="header">
            <h1 class="heading-primary u-padding-left-medium">To Do Lists</h1>
            <div class="u-position-button-right">
                    <a class="btn btn--white" href="/todolists/create">Create a new list</a>
            </div>
    </div>
@endsection


@section('content')


<ul class="main__thelists ">
    @foreach ($todolists as $todolist)
        <li class="thelist">
            <div class="thelist__header">
                <h2 >     
                    <a class="thelist__header-title" href="/todolists/{{ $todolist->id}}">{{ $todolist->title }}</a>
                </h2> 
                <div class="indication">
                        <div class="indication-hidden">
                            <p class="indication-hidden__text"> Click on the list title to edit it or to add new tasks.</p>
                        </div>
                        <p class="indication__symbol">?</p>
                </div>
            </div>
            
                @include('listtasks')
        </li>
    @endforeach
</ul>

   
@endsection