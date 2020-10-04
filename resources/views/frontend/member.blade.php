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

            <form method="post" action="{{route('member.store')}}" enctype="multipart/form-data">
                @csrf
                    <!-- Courses area start -->
                    <section class="pricing-area section-padding40 fix">
                        <div class="container">         
                            <div class="card">
                                <div class="radio-group row justify-content-between px-3">

                                  <div class="col-lg-4 col-md-6 col-sm-6 radio selected">
                                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                       
                                            <div class="properties__card ">
                                                

                                                <div class="form-group">
                                                  <label for="InputMembertype">Membertypes</label>
                                                  <select name="membertype_id" class="form-control">
                                                    <optgroup label="Choose Membertypes">
                                                      @foreach($membertypes as $row)
                                                      <option value="{{$row->id}}">{{$row->name}}</option>
                                                      @endforeach
                                                  </optgroup>
                                              </select>
                                          </div>
                                                


                                                    </div>
                                                </div>
                                            </div>  

                                       


                                        <div class="col-lg-4 col-md-6 col-sm-6 radio">
                                            <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                               
                                                    <div class="properties__card">
                                                        <div class="about-icon">
                                                            <img src="assets/img/icon/price.svg" alt="">
                                                        </div>
                                                        <div class="properties__caption">
                                                            <span class="month">Gold</span>
                                                            <p class="mb-25">$30  <span>(VIP)</span></p>
                                                            <div class="single-features">
                                                                <div class="features-icon">
                                                                    <img src="assets/img/icon/check.svg" alt="">
                                                                </div>
                                                                <div class="features-caption">
                                                                    <p>Pool</p>
                                                                </div>
                                                            </div>
                                                            <div class="single-features">
                                                                <div class="features-icon">
                                                                    <img src="assets/img/icon/check.svg" alt="">
                                                                </div>
                                                                <div class="features-caption">
                                                                    <p>Limited equipments</p>
                                                                </div>
                                                            </div>
                                                            <div class="single-features">
                                                                <div class="features-icon">
                                                                    <img src="assets/img/icon/check.svg" alt="">
                                                                </div>
                                                                <div class="features-caption">
                                                                    <p>Personal trainer</p>
                                                                </div>
                                                            </div>
                                                            <div class="single-features">
                                                                <div class="features-icon">
                                                                    <img src="assets/img/icon/check.svg" alt="">
                                                                </div>
                                                                <div class="features-caption">
                                                                    <p>Zumba and Yoga classes are only available</p>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-6 radio">
                                                <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                                  
                                                        <div class="properties__card">
                                                            <div class="about-icon">
                                                                <img src="assets/img/icon/price.svg" alt="">
                                                            </div>
                                                            <div class="properties__caption">
                                                                <span class="month">Diamond</span>
                                                                <p class="mb-25">$90  <span>(VVIP)</span></p>
                                                                <div class="single-features">
                                                                    <div class="features-icon">
                                                                        <img src="assets/img/icon/check.svg" alt="">
                                                                    </div>
                                                                    <div class="features-caption">
                                                                        <p>Pool</p>
                                                                    </div>
                                                                </div>
                                                                <div class="single-features">
                                                                    <div class="features-icon">
                                                                        <img src="assets/img/icon/check.svg" alt="">
                                                                    </div>
                                                                    <div class="features-caption">
                                                                        <p>Unlimited equipments</p>
                                                                    </div>
                                                                </div>
                                                                <div class="single-features">
                                                                    <div class="features-icon">
                                                                        <img src="assets/img/icon/check.svg" alt="">
                                                                    </div>
                                                                    <div class="features-caption">
                                                                        <p>Personal trainer</p>
                                                                    </div>
                                                                </div>
                                                                <div class="single-features">
                                                                    <div class="features-icon">
                                                                        <img src="assets/img/icon/check.svg" alt="">
                                                                    </div>
                                                                    <div class="features-caption">
                                                                        <p>All classes are available</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                           

                                        </div>

                                    </div>
                                </div>

                            </section>

        				<div class="mt-10">
        					<input type="text" name="weight" placeholder="Weight in lbs"
        					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Weight in lbs'" required
        					class="single-input">
        				</div>
        				
        				<div class="mt-10">
        					<input type="text" name="phone_no" placeholder="Phone No"
        					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone No'" required
        					class="single-input">
        				</div>

        				<div class="mt-10">
        					<input type="text" name="address" placeholder="Address"
        					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required
        					class="single-input">
        				</div>

                       
        				<div class="button-group-area mt-40">
        					<a href="{{asset('/membertypepage')}}" class="genric-btn danger radius">Continue</a>
        				</div>



    			</form>
    		</div>
    	</div>
    </div>

@endsection