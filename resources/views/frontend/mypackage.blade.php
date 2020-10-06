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
    use App\User;
    use App\Memberpackage;
    use App\Member;
    use App\Package;
    use App\Trainer;
    $users = User::find($id=3);
    $members = Member::find($id=7);
    $packages= Package::find($id=1);
    $trainers = Trainer::find($id=1);
    $memberpackages = Memberpackage::find($id=1);
    @endphp

    <section class="pricing-area section-padding40 fix">
        <div class="container">
            <div class="row mt-5">

{{--     @foreach($members as $row) --}}
   
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div class="properties__caption">
                                <p>Name :<span class="month">{{$users->name}}</span></p><br>
                              <p>Phone No :<span class="month">{{$members->phoneno}}</span></p>
                                <p>Weight : <span class="month">{{$members->weight}}</span><span> lbs</span></p>
                              <p>Address :<span class="month">{{$members->address}}</span></p><br>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div class="properties__caption">
                              <p>Pacakge :<span class="month">{{$packages->name}}</span></p><br>
                              <p>Price :<span class="month">{{$packages->price}}</span></p><br>
                              <p>Days :<span class="month">{{$packages->day}}</span></p><br>

                              <p>Trainer :<span class="month">{{$trainers->name}}</span></p><br>

                              <p>Start Date :<span class="month">{{$memberpackages->start_date}}</span></p>
                          </div>
                        </div>
                    </div>
                </div>
 
  {{--   @endforeach --}}
</div>
</div>
</section>

    

@endsection
