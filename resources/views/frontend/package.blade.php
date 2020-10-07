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


 <div class="form-group mt-10">
                        @php
                        use App\Package;          
                        $packages= Package::all();
                        @endphp

<div class="pricing-area section-padding40 fix">
 <div class="container">
  <div class="row">

@foreach($packages as $row)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <label>
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <input type="radio" name="package_id" class="card-input-element" value="{{$row->id}}" checked="checked">
                        <div class="panel panel-default card-input">
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
            </label>
            </div>
 @endforeach
</div>
</div>
</div>
</div>


 <div class="form-group mt-10">
                        @php
                        use App\Trainer;
                        $trainers = Trainer::all();
                        @endphp
<div class="pricing-area section-padding40 fix">
   <div class="container">
      <div class="row">

 @foreach($trainers as $trainer)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <label>
                    <div class=" mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <input type="radio" name="trainer_id" class="card-input-element" value="{{$trainer->id}}" checked="checked">
                        <div class="panel panel-default card-input">
                        <div class="properties__card">
                           <div class="wrapper">
                                <img src="{{asset($trainer->photo)}}" alt="Trainer Photo" class="image--cover">
                            </div>
                            <div class="properties__caption">
                                <span class="month">{{$trainer->name}}</span>
                              <p class="mb-25">{{$trainer->address}}</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </label>
            </div>
 @endforeach

 </div>
</div>
</div>
</div>

 <div class="form-group mt-10">
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
</div>
    <div class="col-lg-9 col-md-6 col-sm-6 mt-5">
          <button type="submit" class="btn btn-success float-right">Continue</button>
    </div>
  
    </form>
    <!-- Courses area End -->
@endsection