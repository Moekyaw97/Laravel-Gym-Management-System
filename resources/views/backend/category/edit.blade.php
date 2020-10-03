@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Category Create')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Category Edit</h1>
<a href="{{route('category.index')}}" class="btn btn-primary float-md-right mb-3"><i class="icofont-arrow-left"></i>Back</a>

{{-- error --}}
 @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
{{-- form --}}
<form method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

  
    
    <div class="form-group">
      <label for="InputName">Name:</label>
      <input type="text" name="name" class="form-control" id="InputName" value="{{$category->name}}">
    </div>

    <div class="form-group">
      <label for="InputPhoto">Photo:</label>
      <input type="file" name="photo" class="form-control" id="InputPhoto">
      <img src="{{asset($category->photo)}}" alt="category photo" class="img-fluid mt-3" height="300" width="300">
      <input type="hidden" name="oldphoto" value="{{$category->photo}}">
    </div>

    

    <button type="submit" class="btn btn-success">Save</button>
</form>
</div>
</div>
@endsection