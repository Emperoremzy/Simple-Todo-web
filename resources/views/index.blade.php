@extends('layout')
@section('content')
<center>
<h1 class="text-white mt-2">Todo App</h1>
@if(count($todo) > 0)
    @foreach ($todo as $todo)

    <div class="card text-center p-4 m-2 w-75">
        <h2><a href="todo/{{$todo->id}}">{{$todo->title}}</a></h2>
    
        <p class="">created on: <button class="btn btn-sm btn-info m-2">{{$todo->created_at}}</button> <br>  completed on:  {{$todo->due}} 
       </p>
     
    </div>

    @endforeach
    @endif
    </center>
 @endsection