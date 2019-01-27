@extends('layout')


@section('title')
    <div class="header">
            <h1 class="heading-primary u-padding-left-medium">Create a new List</h1>
    </div>
@endsection


@section('content')

<div class="main__bg">
        <form method="POST" action='/todolists'>

            @csrf
            
            <input type="text" name="title" placeholder="Enter the title of your list" style="{{ $errors->has('title') ? 'border:solid 1px red' : '' }}" value= "{{ old('title') }}" >
        
            <button type="submit">Create my List</button>
        
        </form>
        @include('errors')
</div>

   
@endsection