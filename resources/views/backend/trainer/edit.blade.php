@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Trainer Create')

@section('content')

<div class="app-title">
  <h1><i class="icofont-star"></i>&nbsp;Trainer Edit</h1>
<a href="{{route('trainer.index')}}" class="btn btn-primary float-md-right mb-3"><i class="icofont-arrow-left"></i>Back</a>
</div>

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
<form method="post" action="{{route('trainer.update',$trainer->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

  
    
    <div class="form-group">
      <label for="InputName">Name:</label>
      <input type="text" name="name" class="form-control" id="InputName" value="{{$trainer->name}}">
    </div>

    <div class="form-group">
      <label for="InputPhoto">Photo:</label>
      <input type="file" name="photo" class="form-control" id="InputPhoto">
      <img src="{{asset($trainer->photo)}}" alt="trainer photo" class="img-fluid mt-3" height="300" width="300">
      <input type="hidden" name="oldphoto" value="{{$trainer->photo}}">
    </div>

    <div class="form-group">
      <label for="phoneNo">Phone No</label>
      <input type="text" name="phoneno" class="form-control" id="phoneNo" value="{{$trainer->phoneno}}">
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" name="address" id="address">{{$trainer->address}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>

@endsection