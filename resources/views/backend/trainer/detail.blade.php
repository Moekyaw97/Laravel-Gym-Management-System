@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Trainer List')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Trainer Detail</h1>
<a href="{{route('trainer.index')}}" class="btn btn-primary mt-3 float-md-right"><i class="icofont-arrow-left"></i>Back</a>
<form class="mt-5">
<img src="{{asset($trainer->photo)}}" alt="Trainer Photo" class="img-fluid mb-4" height="300" width="300">
<h3>Name :{{$trainer->name}}</h3>

<h3>Phone no :{{$trainer->phoneno}}</h3>
<h3>Address :{{$trainer->address}}</h3>



</form>
</div>
</div>
@endsection