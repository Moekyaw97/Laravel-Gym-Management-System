
@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Package List')

@section('content')

<div class="app-title">
         <h1><i class="icofont-star"></i>&nbsp;Package List</h1> 
        <a href="{{route('package.create')}}" class="btn btn-primary float-md-right mb-3"><i class="icofont-plus-square"></i> Add</a>
      </div>
		<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                 <thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Price</th>
					<th>Day</th>
					<th>Discount</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody> 
				@foreach($packages as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->price}}</td>
					<td>{{$row->day}}</td>
					<td>{{$row->discount}}</td>
					<td>
						<a href="{{route('package.show',$row->id)}}" class="btn btn-info"><i class="icofont-ui-file"></i> Detail</a>
						<a href="{{route('package.edit',$row->id)}}" class="btn btn-warning"><i class="icofont-edit"></i> Edit</a>
						<form method="post" action="{{route('package.destroy',$row->id)}}" onsubmit="return confirm('Are u sure ?')" class=" d-inline-block">
							@csrf
							@method('DELETE')

							<button class="btn btn-danger" type="submit"> 
								<i class="icofont-ui-delete"></i> Delete</i>
							</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
  </div>
	
		
	</div>
</div>

	@endsection