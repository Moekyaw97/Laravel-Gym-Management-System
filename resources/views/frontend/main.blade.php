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
                                <a href="{{asset('/packagepage')}}" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">Get Start</a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->

     @endsection