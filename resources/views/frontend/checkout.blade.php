@extends('frontendtemplate')
@section('title','MK_fitness.checkout')
@section('content')

<!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Chckout Payment</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <section class="product-details spad">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 shadow p-3 mb-5 bg-white rounded">
                    <div class="row">
                        <div class="col-12 pt-5 text-center">
                            <h1>Successfully subscribed the package</h1>
                            <h2 class="mt-3"> Thanks for belive in us , Enjoy</>
                        </div>
                        <div class="col-12 text-center">
                            <img src="{{ asset('success-tick-dribbble.gif') }}" class="img-fluid">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection