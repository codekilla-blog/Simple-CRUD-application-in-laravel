  @extends('layout')
@section('content')
<div class="row">
<div class="col-md-4">

<h1>Add New Blog</h1>
<hr>
<form action="{{route('store')}}" method="post">
{{ csrf_field() }}
    <div class="form-group">
          
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <label for="title"> Title</label>
        <input type="text" class="form-control" id="title"  name="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection