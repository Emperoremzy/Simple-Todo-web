@extends('layout')


@section('content')
<center>
    <div class="container card w-75">
          <h1 class="">{{$todo->title}}</h1>
      <p>  <span class="badge badge-danger" >Completed on : {{$todo->due}}</span></p>
            <hr>
        <p>{{$todo->content}}</p>
        <div class="row">
        <div class="col-sm-3"></div>
            <div class="col-sm-2"> <a href="/todo/{{$todo->id}}/edit" class="btn btn-sm  btn-block btn-info m-2 ">edit</a></div>
            <div  class="col-sm-2">
            <form method = "post" action = "/todo/{{$todo->id}}">
                @csrf
                @method('DELETE')
                     <button type="submit" class="btn btn-sm btn-block btn-danger m-2">delete</button>
                </form>
            </div>
                 <div class="col-sm-2"><a href="/todo" class="btn btn-sm btn-block btn-light m-2 ">Go back</a></div>
        </div>
            
    </div>
    </center>
@endsection