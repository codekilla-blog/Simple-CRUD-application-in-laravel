@extends('layout')
@section('content')

<h1>Showing Blog -  {{ $blog->title }}</h1>
<div class=" card col-md-4">
    <p>
        <strong>Title:</strong> {{ $blog->title }}<br>
        <strong>Description:</strong> {{ $blog->description }}
    </p>
</div>
@endsection