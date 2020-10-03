@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Members Create')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Member Edit</h1>
<a href="{{route('member.index')}}" class="btn btn-primary float-md-right mb-3"><i class="icofont-arrow-left"></i>Back</a>

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
<form method="post" action="{{route('member.update',$member->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

   <div class="form-group">
      <label for="InputUserid">User ID:</label>
      <input type="number" name="user_id" class="form-control" id="InputUserid" value="{{$member->user_id}}">
    </div>

     <div class="form-group">
      <label for="Salary">Weight</label>
      <input type="number" name="weight" class="form-control" id="weight" value="{{$member->weight}}">
    </div>

    
    <div class="form-group">
      <label for="InputName">Name:</label>
      <input type="text" name="name" class="form-control" id="InputName" value="{{$member->name}}">
    </div>

    <div class="form-group">
      <label for="InputProfile">Profile:</label>
      <input type="file" name="profile" class="form-control" id="InputProfile">
      <img src="{{asset($member->profile)}}" alt="profile photo" class="img-fluid mt-3" height="300" width="300">
      <input type="hidden" name="oldprofile" value="{{$member->profile}}">
    </div>

    <div class="form-group">
      <label for="phoneNo">Phone No</label>
      <input type="text" name="phoneno" class="form-control" id="phoneNo" value="{{$member->phoneno}}">
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" name="address" id="address">{{$member->address}}</textarea>
    </div>

   

    <button type="submit" class="btn btn-success">Save</button>
</form>
</div>
</div>
@endsection