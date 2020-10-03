@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Category List')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Category Detail</h1>
<a href="{{route('category.index')}}" class="btn btn-primary mt-3 float-md-right"><i class="icofont-arrow-left"></i>Back</a>
<form class="mt-5">

<img src="{{asset($category->photo)}}" alt="category Photo" class="img-fluid mb-4" height="300" width="300">

<h3>Name :{{$category->name}}</h3>



</form>
</div>
</div>
@endsection