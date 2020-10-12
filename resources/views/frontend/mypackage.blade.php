@extends('frontendtemplate')
@section('title','MK_fitness.mypackage')
@section('content')
<!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 ">
                            <h2>My Pacakge</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

<div class="container">
     <div class="row justify-content-center">
      <div class="col-lg-8 col-md-6 col-sm-6 pp">
      <form>
        <div  id="packtb">
  <label>{{$member->user->name}}</label>
  <label>{{$member->weight}} lbs</label>
  <label>{{$member->address}}</label>
  <label>{{$member->user->email}}</label>
  <label>{{$member->phoneno}}</label>
</div>
<div id="packline"></div>
    <table style="width:100%" class="mt-5">
   
      <thead id="packtb">
         <tr>
      <th>Packages</th>
      <th>Price</th>
      <th>Trainer</th>
      <th>Remaining days</th>
      <th>Start Date</th>
       </tr>
      </thead>
   

  @foreach($member->memberpackage as $memberpackage)
  <tbody>
    <tr>
     
       <td>{{$memberpackage->package->name}}</td>
       <td>{{$memberpackage->package->price}}</td>
       <td>{{$memberpackage->trainer->name}}</td>
       <td>{{$memberpackage->package->day}}</td> 
       <td>{{$memberpackage->start_date}}</td>
      
    </tr>
  </tbody>
   @endforeach
</table>
</div>
</form>
</div>
</div>

 



    

@endsection
