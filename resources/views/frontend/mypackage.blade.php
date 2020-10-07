@extends('frontendtemplate')
@section('title','MK_fitness.mypackage')
@section('content')
<!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>My pacakge</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    @php  
  
    @endphp

    <section class="pricing-area section-padding40 fix">
        <div class="container">
            <div class="row mt-5">

   
   
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div class="properties__caption">
                             <p>Name :<span class="month">{{$member->user->name}}</span></p><br>
                              <p>Phone No :<span class="month">{{$member->phoneno}}</span></p> 
                                <p>Weight : <span class="month">{{$member->weight}}</span><span> lbs</span></p>
                             <p>Address :<span class="month">{{$member->address}}</span></p><br> 
                          </div>
                        </div>
                    </div>
                </div>
              @foreach($member->memberpackage as $memberpackage)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div class="properties__caption">
                              <p>Pacakge :<span class="month">{{$memberpackage->package->name}}</span></p><br>
                              <p>Price :<span class="month">{{$memberpackage->package->price}}</span></p><br>
                              <p>Days :<span class="month">{{$memberpackage->package->day}}</span></p><br>
                              <p>Trainer :<span class="month">{{$memberpackage->trainer->name}}</span></p><br>
                              <p>Start Date :<span class="month">{{$memberpackage->start_date}}</span></p>
                          </div>
                        </div>
                    </div>
                </div>
 
    @endforeach
</div>
</div>
</section>

    

@endsection
