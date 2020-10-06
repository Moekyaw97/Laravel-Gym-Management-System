@extends('frontendtemplate')
@section('title','MK_fitness.member')
@section('content')




<!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Member Registration</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <div class="section-top-border text-center">
    	<div class="row">
    		<div class="col-lg-3 col-md-3"></div>
    		<div class="col-lg-6 col-md-6">
    			<div class="typography">
    				<h1>Pls fill your information</h1>
    			</div>
             
               
                  
 
               

                  <!-- Courses area start -->
                    <section class="pricing-area section-padding40 fix">
                        <div class="container">         
                            <div class="card">
                                <div class="radio-group row justify-content-between px-3" name="membertype_id">

                                  <div class="col-lg-4 col-md-6 col-sm-6 radio selected">
                                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                            <div class="properties__card ">
                                                 <div class="about-icon">
                                                            <img src="assets/img/icon/price.svg" alt="">
                                                        </div>
                                                        <div class="properties__caption">
                                                            <span class="month">Standard</span>
                                                            <p class="mb-25">$0  <span>(VIP)</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 radio" >
                                            <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                                    <div class="properties__card">
                                                        <div class="about-icon">
                                                            <img src="assets/img/icon/price.svg" alt="">
                                                        </div>
                                                        <div class="properties__caption">
                                                            <span class="month">Gold</span>
                                                            <p class="mb-25">$60  <span>(VIP)</span></p>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 radio" name="membertype_id">
                                                <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                                        <div class="properties__card">
                                                            <div class="about-icon">
                                                                <img src="assets/img/icon/price.svg" alt="">
                                                            </div>
                                                            <div class="properties__caption">
                                                                <span class="month">Diamond</span>
                                                                <p class="mb-25">$90  <span>(VVIP)</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           

                                        </div>
                                    </div>
                                </div>
                            </section>

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

            <form method="post" action="{{route('memberpage')}}" enctype="multipart/form-data">
               @csrf

               @php
               $membertype1 =1;
               $membertype2 =2;
               $membertype3 =3;
               @endphp

               <div class="form-group mt-10">
                  <select class="form-control" name="membertype_id" placeholder="Membertypes">
                    <option value="{{$membertype1}}">Standard</option>
                    <option value="{{$membertype2}}">Gold</option>
                    <option value="{{$membertype3}}">Diamond</option>
                </select>
            </div>
                          
               
                @php 
                $auth = Auth::user();
                $userid = $auth->id;
                @endphp
                        <div class="form-group mt-10">
                            <input type="hidden" name="user_id" value="{{$userid}}"placeholder="Membertypes"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Membertypes'" required
                            class="single-input">
                        </div>

        				<div class="form-group mt-10">
        					<input type="text" name="weight" placeholder="Weight in lbs"
        					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Weight in lbs'" required
        					class="single-input">
        				</div>
        				
        				<div class="form-group mt-10">
        					<input type="text" name="phoneno" placeholder="Phone No"
        					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone No'" required
        					class="single-input">
        				</div>

        				<div class="form-group mt-10">
        					<input type="text" name="address" placeholder="Address"
        					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required
        					class="single-input">
        				</div>

                         <button type="submit" class="btn btn-success">Create</button>

                       
        				


    			</form>
    		</div>
    	</div>
    </div>

@endsection