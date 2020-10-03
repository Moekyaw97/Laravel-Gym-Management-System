@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Package List')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Package Detail</h1>
<a href="{{route('package.index')}}" class="btn btn-primary mt-3 float-md-right"><i class="icofont-arrow-left"></i>Back</a>
<form class="mt-5">


<h3>Name :{{$package->name}}</h3>
<h3>Price :{{$package->price}}</h3>
<h3>Day :{{$package->day}}</h3>
<h3>Discount :{{$package->discount}}</h3>
<h3>Category :{{$package->category->name}}</h3>


</form>
</div>
</div>
@endsection