@extends('layout')


@section('content')

<h1>Create a new List</h1>

<form method="POST" action='/todolists'>

    @csrf
    
    <input type="text" name="title" placeholder="Enter the title of your list" style="{{ $errors->has('title') ? 'border:solid 1px red' : '' }}" value= "{{ old('title') }}" >

    <button type="submit">Create my List</button>

</form>
@include('errors')
   
@endsection