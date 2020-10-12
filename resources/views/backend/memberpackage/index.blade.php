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
					<th>Package-Days</th>
					<th>Use-Days</th>
					<th>Remain-Days</th>
				</tr>
			</thead>
			<tbody> 
				@php
				$i=1;

				@endphp

				@foreach($memberpackages as $row)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$row->member->user->name}}</td>
					<td>{{$row->member->weight}}</td>
					<td>{{$row->member->address}}</td>
					<td>{{$row->package->name}}</td>
					<td>{{$row->trainer->name}}</td>
					<td>{{$row->start_date}}</td>
					<td>{{$row->time}}</td>
					@php
					$start_date = strtotime($row->start_date); 
					$end_date = strtotime($current); 
					$diff= ($end_date - $start_date)/60/60/24;
					$remaindays=($row->time - $diff); 
					
					
					
					@endphp
					<td>{{$diff}}</td>

					@if ($remaindays >0)
					<td>{{$remaindays}}</td>

					@else
						<td style="color: #ff0000;">Passed </td>
					@endif	
								
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