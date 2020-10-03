@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Trainer Create')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Trainer Create</h1>
<a href="{{route('trainer.index')}}" class="btn btn-primary float-md-right mb-3"><i class="icofont-arrow-left"></i>Back</a>


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
<form method="post" action="{{route('trainer.store')}}" enctype="multipart/form-data">
    @csrf

  

    <div class="form-group">
      <label for="InputName">Name:</label>
      <input type="text" name="name" class="form-control" id="InputName">
    </div>

    <div class="form-group">
      <label for="InputPhoto">Photo:</label>
      <input type="file" name="photo" class="form-control-file" id="InputPhoto" class="img-fluid">
    </div>

   <div class="form-group">
      <label for="phoneNo">Phone No</label>
      <input type="text" name="phoneno" class="form-control" id="phoneNo">
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" name="address" id="address"></textarea>
    </div>

    

    <button type="submit" class="btn btn-success">Create</button>
</form>
</div>
</div>
@endsection