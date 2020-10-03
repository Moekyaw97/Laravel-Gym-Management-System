@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Package Create')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Package Edit</h1>
<a href="{{route('package.index')}}" class="btn btn-primary float-md-right mb-3"><i class="icofont-arrow-left"></i>Back</a>

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
<form method="post" action="{{route('package.update',$package->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

  
     <div class="form-group">
      <label for="InputName">Name:</label>
      <input type="text" name="name" class="form-control" id="InputName" value="{{ $package->name }}">
    </div>

    <div class="form-group col-md-12 ">
      <label for="price"> Price </label>
      <input type="number" id="price" name="price" value="{{ $package->price }}">
    </div>

    <div class="form-group col-md-12 ">
      <label for="day"> Day </label>
      <input type="number" id="day" name="day" value="{{ $package->day}}">
    </div>


    <div class="form-group col-md-12 ">
      <label for="discount"> Discount </label>
      <input type="number" id="discount" name="discount" value="{{ $package->discount}}">
    </div>

    <div class="form-group col-md-12">
      <label for="name">Category</label>
      <select class="form-control" name="category_id">
        @foreach($categories as $row)
          <option value="{{$row->id}}"
            @if($row->id==$package->category_id)
            {{'selected'}}
            @endif
            >{{$row->name}}</option>
          @endforeach
      </select>
    </div>
        

    <button type="submit" class="btn btn-success">Save</button>
</form>
</div>
</div>
@endsection