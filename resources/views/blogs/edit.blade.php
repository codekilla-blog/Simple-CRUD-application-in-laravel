@extends('layout')
@section('content')
<div class="row">
<div class="col-md-4">

<h1>Edit Blog</h1>
<hr>

<form action="{{route('update', $blog->id)}}" method="POST">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{$blog->id}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Task Title</label>
        <input type="text" value="{{$blog->title}}" class="form-control" id="taskTitle"  name="title" >
    </div>
    <div class="form-group">
        <label for="description">Task Description</label>
        <input type="text" value="{{$blog->description}}" class="form-control" id="taskDescription" name="description" >
    </div>
    

     
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
@endsection