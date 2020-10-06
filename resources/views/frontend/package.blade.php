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
   
    {{-- Error --}}
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
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
  <select class="form-control" name="trainer_id" placeholder="Packages">
    @foreach($trainers as $trainer)
    <option value="{{$trainer->id}}">{{$trainer->name}}</option>
    @endforeach
</select>
</div>




 @foreach($trainers as $trainer)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div>
                                <img src="{{asset($trainer->photo)}}" alt="Trainer Photo" class="" height="200" width="200">
                            </div>
                            <div class="properties__caption">
                                <span class="month">{{$trainer->name}}</span>
                              <p class="mb-25">{{$trainer->address}}</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
 @endforeach

            </div>
        </div>
    </section>

    <div class="row justify-content-center">

   <div class="col-lg-2 col-md-6 col-sm-6">
        <input type="date" name="start_date" placeholder="Date"
        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date'" required
        class="single-input">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <select class="form-control" name="time" placeholder="Days">
            <option value="30">30 Days</option>
            <option value="60">60 Days</option>
            <option value="90">90 Days</option>
        </select>
    </div>
    </div>

    <div class="col-lg-9 col-md-6 col-sm-6 mt-5">
          <button type="submit" class="btn btn-success float-right">Continue</button>
    </div>
  
    </form>
    <!-- Courses area End -->
@endsection