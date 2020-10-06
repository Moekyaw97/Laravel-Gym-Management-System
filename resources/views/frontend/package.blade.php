@extends('frontendtemplate')
@section('title','MK_fitness.package')
@section('content')

 <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Package Program</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
   

<form method="post" action="{{route('packagepage')}}" enctype="multipart/form-data">
               @csrf
                @php 
                $auth = Auth::user();
                $memberid = $auth->id;
                @endphp
                        <div class="form-group mt-10">
                            <input type="hidden" name="member_id" value="{{$memberid}}"placeholder="Membertypes"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Membertypes'" required
                            class="single-input">
                        </div>

                        @php
                        use App\Package;
                        use App\Trainer;
                        $packages= Package::all();
                        $trainers = Trainer::all();
                        @endphp
 <!-- Courses area start -->
    <section class="pricing-area section-padding40 fix">
        <div class="container">
            <div class="row mt-5">
<div class="col-lg-12 col-md-12 col-sm-12 mt-5 mb-5">
<select class="form-control" name="package_id" placeholder="Packages">
@foreach($packages as $row)
<option value="{{$row->id}}">{{$row->name}}</option>
@endforeach
</select>
</div>
@foreach($packages as $row)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="assets/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">{{$row->name}}</span>
                              <p class="mb-25">{{$row->price}}<span>({{$row->day}})Days</span></p>
                              <span class="month">{{$row->discount}}</span>

                            </div>
                        </div>
                    </div>
                </div>
 @endforeach

<div class="col-lg-12 col-md-12 col-sm-12 mb-5">
  <select class="form-control" name="package_id" placeholder="Packages">
    @foreach($trainers as $row)
    <option value="{{$row->id}}">{{$row->name}}</option>
    @endforeach
</select>
</div>




 @foreach($trainers as $row)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div>
                                <img src="{{asset($row->photo)}}" alt="Trainer Photo" class="" height="200" width="200">
                            </div>
                            <div class="properties__caption">
                                <span class="month">{{$row->name}}</span>
                              <p class="mb-25">{{$row->address}}</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
 @endforeach

            </div>
        </div>
    </section>


    @php 
    $std = 2020;
    $time = 12;
    @endphp
    <div class="form-group mt-10">
        <input type="hidden" name="start_date" value="{{$std}}"placeholder=""
        onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
        class="single-input">
    </div>
     <div class="form-group mt-10">
        <input type="hidden" name="time" value="{{$time}}"placeholder=""
        onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
        class="single-input">
    </div>


    <button type="submit" class="btn btn-success float-right mt-5">Continue</button>
    </form>
    <!-- Courses area End -->
@endsection