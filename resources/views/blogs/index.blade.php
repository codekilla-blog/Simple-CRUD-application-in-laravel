@extends('layout')
@section('content')
<div class="container">

<h1>All Blogs</h1>
<hr>
<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @if($blogs)
    @foreach($blogs as $blog)
      <tr>
        <td>{{$blog->id}}</td>
        <td>{{$blog->title}}</td>
        <td>{{$blog->description}}</td>
        <td>
            <a href="{{route('edit',$blog->id)}}" class="btn btn-primary">Edit</a>
            <form action="{{url('delete/blog', [$blog->id])}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" class="btn btn-danger" value="Delete"/>
</form>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
</div>
@endsection