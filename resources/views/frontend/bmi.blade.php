@extends('frontendtemplate')
@section('title','MK_fitness.bmi')
@section('content')
	
<!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>BMI Calculation</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
<div class="container">              	 
	 	<div class="row justify-content-center">
	 		<div class="col-lg-8 col-md-6 col-sm-6 bb">
                	
	 				<div class="firstLabel">
	 					<label>Your height: </label>
	 					<input class = "values" type="text"  id="feet" required>&nbsp;ft
	 					<input class = "values" type="text"  id="inches" required>&nbsp;inches
	 				</div>
	 				<br>
	 				<div>
	 					<label>Your weight:</label>
	 					<input class = "values" type="text" id="weight" required >&nbsp;lbs
	 				</div>
	 				<br>

	 				<button id="btnn" type="submit" class="bttn">Calculate</button>
	 				<div>
	 					<h4>Your BMI:</h4>
	 					<p id="result"></p>

	 				</div>
	 				<p id="message" class="text-center"></p>
                	 			
                </div>
                
                </div>
         
        </div>
    </div>

 
   
@endsection
