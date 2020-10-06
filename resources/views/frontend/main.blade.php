@extends('frontendtemplate')
@section('title','MK_fitness.home')
@section('content')


<!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay="0.1s">Welcome from MK Fitness</span>
                                <h1 data-animation="fadeInLeft" data-delay="0.4s">in Myanmar</h1>
                                <a href="{{route('memberformpage')}}" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">Get start to become a member</a>
                               {{--  <form action="#" method="POST">
                                    <div class="col-xl-6 col-lg-6 col-md-6 mt-10">
                                        <input type="email" name="email" placeholder="E-Mail"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-Mail'" required
                                        class="single-input">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 mt-10">
                                    <input type="password" name="password" placeholder="Password"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                                    class="single-input">
                                </div>
                                <div class="button-group-area col-xl-6 col-lg-6 col-md-6 mt-40">
                                    <a href="{{asset('/formpage')}}" class="genric-btn danger radius">LogIn</a>
                                </div>
                            </form>     --}}
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
 

     @endsection