@extends('layout')

@section('content')
    <div class="card p-3">
        <div class="container">
        <h1>Create New todo</h1>
            <form method = "post" action = "/todo">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" rows="5"  placeholder="Enter a Title for todo" value="{{old('title')}}">
                 </div>
     
                 <div class="form-group">
                    <label for="Due">Due</label>
                    <input type="text" class="form-control" id="Due" name="due" rows="5" placeholder="Enter a Due day" value="{{old('due')}}">
                 </div>
               
                 <div class="form-group">
                    <label for="Content">Content</label>
                    <textarea class="form-control" id="Content" name="content" rows="5" value="{{old('content')}}"></textarea>
                </div>
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
    </div>
@endsection