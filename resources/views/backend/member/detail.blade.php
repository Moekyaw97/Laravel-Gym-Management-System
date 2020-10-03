@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Member List')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Member Detail</h1>
<a href="{{route('member.index')}}" class="btn btn-primary mt-3 float-md-right"><i class="icofont-arrow-left"></i>Back</a>
<form class="mt-5">
<img src="{{asset($member->profile)}}" alt="Member Profile" class="img-fluid mb-4" height="300" width="300">
<h3>Name :{{$member->name}}</h3>
<h3>Weight :{{$member->weight}}</h3>
<h3>Phone no :{{$member->phoneno}}</h3>
<h3>Address :{{$member->address}}</h3>



</form>
</div>
</div>
@endsection