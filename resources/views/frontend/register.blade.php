@extends('frontendtemplate')
@section('title','MK_fitness.register')
@section('content')


<!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Register as user</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->




     <div class="section-top-border text-center">
    	<div class="row">
    		<div class="col-lg-4 col-md-4"></div>
    		<div class="col-lg-4 col-md-4">
    			<div class="typography mb-5">
    				<h1>Pls Fill Your Information</h1>
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

    			<form method="post" action="{{-- {{route('user.store')}} --}}" enctype="multipart/form-data">
    				@csrf

    				<div class="mt-10">
    					<input type="text" name="name" placeholder="Name"
    					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required
    					class="single-input">
    				</div>
    				
    				<div class="mt-10">
    					<input type="email" name="email" placeholder="E-Mail"
    					onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-Mail'" required
    					class="single-input">
    				</div>
    				<div class="mt-10">
    					<input type="password" name="password" placeholder="Password"
    					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
    					class="single-input">
    				</div>
    				{{-- <div class="mt-10">
    					<input type="password" name="confirm_password" placeholder="Confirm Password"
    					onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required
    					class="single-input">
    				</div> --}}

    				<div class="button-group-area mt-40">
    					<a href="{{asset('/membertypepage')}}" class="genric-btn danger radius">Register</a>
    				</div>

    			</form>
    		</div>
    	</div>
    </div>



@endsection