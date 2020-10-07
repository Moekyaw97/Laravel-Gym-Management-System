@extends('backendtemplate')
{{-- @extends('layouts.app') --}}
@section('title','Member List')

@section('content')

<div class="app-title">
         <h1><i class="icofont-star"></i>&nbsp;Member List</h1> 
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
					<th>Weight</th>
					<th>Address</th>
					<th>Package</th>
					<th>Trainer</th>
					<th>Start Date</th>
				</tr>
			</thead>
			<tbody> 
				@php
				use App\Package;
				$packages=Package::all();
				@endphp

				@foreach($memberpackages as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->member->user->name}}</td>
					<td>{{$row->member->weight}}</td>
					<td>{{$row->member->address}}</td>
					<td>{{$row->package->name}}</td>
					<td>{{$row->trainer->name}}</td>
				
					<td>{{$row->start_date}}</td>


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