@extends('layout')

@section('content')
<div class="card p-3">
        <div class="container">
        <h1>Edit todo</h1>
            <form method = "post" action = "/todo/{{$todo->id}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title"   placeholder="Enter a Title for todo" value="{{$todo->title}}">
                 </div>
     
                 <div class="form-group">
                    <label for="Due">Due</label>
                    <input type="text" class="form-control" id="Due" name="due"  placeholder="Enter a Due day" value="{{$todo->due}}">
                 </div>
                 <div class="form-group">
                    <label for="Content">Content</label>
                    <textarea class="form-control" id="Content" name="content" rows="4" placeholder="{{$todo->content}}" ></textarea>
                </div>
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>

@endsection