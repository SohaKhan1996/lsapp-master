@extends('layouts.app')
@section('content')
<hr>
{{-- <div class="myDiv">this is my div with multiple colours. It work's with text too!</div> --}}
	{{-- <div class="limiter"> --}}
		<div class="container" >
		<div class="row"  style="width:50%; ">
			
			<div class="col-sm-2 " >Sowing Season</div>
			<div class="col-sm-1 " style="background-color:#ffb0b0; border: 10px solid white; border-right: 15px solid white;"></div>
			<div class="col-sm-2 " >Harvesting Season</div>
			<div class="col-sm-1 " style="background-color:rgb(160, 197, 63);border: 10px solid white;border-right: 15px solid white;"></div>
		 </div>
		</div>
		
			
		<div class="container-table100">
		
			<div class="wrap-table100">
					<div class="table">

						<div class="rowt header">
							<div class="cell">
									
							</div>
							<div class="cell">
								Plant
							</div>
							<div class="cell">
								Growth
							</div>
							<div class="cell">
								Sunlight
							</div>
							<div class="cell">
								Watering	
							</div>
							<div class="cell">
								Quantity
							</div>
							<div class="cell">
								Space
							</div>
							
							<div class="cell">
								Jan
							</div>
							<div class="cell">
									Feb
							</div>
							<div class="cell">
									March
							</div>
							<div class="cell">
									April
							</div>
							<div class="cell">
									May
							</div>
							<div class="cell">
									June
							</div>
							<div class="cell">
									July
							</div>
							<div class="cell">
									Aug			
							</div>
							<div class="cell">
									Sep
							</div>
							<div class="cell">
									Oct
							</div>
							<div class="cell">
									Nov
							</div>
							<div class="cell">
									Dec
							</div>
						</div>

						<div class="rowt">
							<div class="cell" data-title="Full Name">
								<img  src="/images/seed/beets.png" align="right" alt="IMG-PRODUCT">	
							</div>
							<div class="cell" data-title="Age">
								Beets 
							</div>
							<div class="cell" data-title="Job Title">
								<img class="Img" src="/images/icons/onspot.png" align="right" alt="IMG-PRODUCT">
									
							</div>
							<div class="cell" data-title="Full Name">
								<img class="sunImg" src="/images/icons/partial.png" align="right" alt="IMG-PRODUCT">
								</div>
								<div class="cell" data-title="Age">
									<img class="water"  src="/images/icons/little.png" align="right" alt="IMG-PRODUCT" >
								</div>
								<div class="cell" data-title="Age" style="align:center">
										18
								</div>
								<div class="cell" data-title="Age">
									18 per sq.ft.
								</div>
							<div class="cell myDiv" data-title="Full Name">	
								</div>
							<div class="cell sow" data-title="Full Name">	
								</div>
							<div class="cell myDiv" data-title="Full Name">	
							</div>
							<div class="cell blank" data-title="Full Name">	
							</div>
							<div class="cell harvest" data-title="Full Name">	
							</div>
							<div class="cell myDiv" data-title="Full Name">	
							</div>
							<div class="cell myDiv" data-title="Full Name">	
							</div><div class="cell myDiv" data-title="Full Name">	
							</div><div class="cell myDiv" data-title="Full Name">	
							</div>
							<div class="cell myDiv" data-title="Full Name">	
								</div><div class="cell myDiv" data-title="Full Name">	
								</div><div class="cell myDiv" data-title="Full Name">	
								</div>
						</div>

						<div class="rowt">
							<div class="cell" data-title="Full Name">
								<img  src="/images/seed/corn.png" align="right" alt="IMG-PRODUCT">	
							</div>
							<div class="cell" data-title="Age">
								Corn
							</div>
							<div class="cell" data-title="Job Title">
								<img class="Img" src="/images/icons/onspot.png" align="right" alt="IMG-PRODUCT">
									
							</div>
							<div class="cell" data-title="Full Name">
								<img class="sunImg" src="/images/icons/sun.png" align="right" alt="IMG-PRODUCT">
								</div>
								<div class="cell" data-title="Age">
									<img  class="water" src="/images/icons/lotsOfWater.png" align="right" alt="IMG-PRODUCT" >
								</div>
								<div class="cell" data-title="Age">
										5
								</div>
								<div class="cell" data-title="Age">
									1 per sq. ft.
								</div>
							<div class="cell sow" data-title="Full Name">	
								</div>
							<div class="cell myDiv" data-title="Full Name">	
								</div>
							<div class="cell harvest" data-title="Full Name">	
							</div>
							<div class="cell blank" data-title="Full Name">	
							</div>
							<div class="cell harvest" data-title="Full Name">	
							</div>
							<div class="cell sow" data-title="Full Name">	
							</div>
							<div class="cell myDiv" data-title="Full Name">	
							</div><div class="cell myDiv" data-title="Full Name">	
							</div><div class="cell sow" data-title="Full Name">	
							</div>
							<div class="cell sow" data-title="Full Name">	
								</div><div class="cell myDiv" data-title="Full Name">	
								</div><div class="cell myDiv" data-title="Full Name">	
								</div>
						</div>

						<div class="rowt">
							<div class="cell" data-title="Full Name">
								<img  src="/images/seed/broccoli.png" align="right" alt="IMG-PRODUCT">	
							</div>
							<div class="cell" data-title="Age">
								Broccoli 
							</div>
							<div class="cell" data-title="Job Title">
								<img class="Img" src="/images/icons/herbacious.png" align="right" alt="IMG-PRODUCT">
									
							</div>
							<div class="cell" data-title="Full Name">
								<img class="sunImg" src="/images/icons/partial.png" align="right" alt="IMG-PRODUCT">
								</div>
								<div class="cell" data-title="Age">
									<img class="water" src="/images/icons/moderate.png" align="right" alt="IMG-PRODUCT" >
								</div>
								<div class="cell" data-title="Age">
										15
								</div>
								<div class="cell" data-title="Age">
									1 per sq. ft.
								</div>
							<div class="cell myDiv" data-title="Full Name">	
								</div>
							<div class="cell sow" data-title="Full Name">	
								</div>
							<div class="cell myDiv" data-title="Full Name">	
							</div>
							<div class="cell sow" data-title="Full Name">	
							</div>
							<div class="cell harvest" data-title="Full Name">	
							</div>
							<div class="cell blank" data-title="Full Name">	
							</div>
							<div class="cell myDiv" data-title="Full Name">	
							</div><div class="cell blank" data-title="Full Name">	
							</div><div class="cell myDiv" data-title="Full Name">	
							</div>
							<div class="cell harvest" data-title="Full Name">	
								</div><div class="cell myDiv" data-title="Full Name">	
								</div><div class="cell sow" data-title="Full Name">	
								</div>
						</div>

						<div class="rowt">
							<div class="cell" data-title="Full Name">
								<img src="/images/seed/carrots.png" align="right" alt="IMG-PRODUCT">	
							</div>
							<div class="cell" data-title="Age">
								Carrot 
							</div>
							<div class="cell" data-title="Job Title">
								<img class="Img" src="/images/icons/onspot.png" align="right" alt="IMG-PRODUCT">
									
							</div>
							<div class="cell" data-title="Full Name">
								<img class="sunImg" src="/images/icons/sun.png" align="right" alt="IMG-PRODUCT">
								</div>
								<div class="cell" data-title="Age">
									<img class="water"  src="/images/icons/lotsOfWater.png" align="right" alt="IMG-PRODUCT" >
								</div>
								<div class="cell" data-title="Age">
										6
								</div>
								<div class="cell" data-title="Age">
									3 per sq. ft.
								</div>
							<div class="cell myDiv" data-title="Full Name">	
								</div>
							<div class="cell blank" data-title="Full Name">	
								</div>
							<div class="cell harvest" data-title="Full Name">	
							</div>
							<div class="cell blank" data-title="Full Name">	
							</div>
							<div class="cell harvest" data-title="Full Name">	
							</div>
							<div class="cell myDiv" data-title="Full Name">	
							</div>
							<div class="cell sow" data-title="Full Name">	
							</div><div class="cell sow" data-title="Full Name">	
							</div><div class="cell harvest" data-title="Full Name">	
							</div>
							<div class="cell myDiv" data-title="Full Name">	
								</div><div class="cell myDiv" data-title="Full Name">	
								</div><div class="cell blank" data-title="Full Name">	
								</div>
						</div>

						
						
						<div class="rowt">
							<div class="cell" data-title="Full Name">
								<img  src="/images/seed/cucumbers.png" align="right" alt="IMG-PRODUCT">	
							</div>
							<div class="cell" data-title="Age">
								Cucumber 
							</div>
							<div class="cell" data-title="Job Title">
								<img class="Img" src="/images/icons/climber.png" align="right" alt="IMG-PRODUCT">
									
							</div>
							<div class="cell" data-title="Full Name">
								<img class="sunImg" src="/images/icons/no.png" align="right" alt="IMG-PRODUCT">
								</div>
								<div class="cell" data-title="Age">
									<img class="water"  src="/images/icons/moderate.png" align="right" alt="IMG-PRODUCT" >
								</div>
								<div class="cell" data-title="Age">
										10
								</div>
								<div class="cell" data-title="Age">
									5 per sq. ft.
								</div>
							<div class="cell harvest" data-title="Full Name">	
								</div>
							<div class="cell sow" data-title="Full Name">	
								</div>
							<div class="cell sow" data-title="Full Name">	
							</div>
							<div class="cell harvest" data-title="Full Name">	
							</div>
							<div class="cell harvest" data-title="Full Name">	
							</div>
							<div class="cell myDiv" data-title="Full Name">	
							</div>
							<div class="cell blank" data-title="Full Name">	
							</div><div class="cell sow" data-title="Full Name">	
							</div><div class="cell harvest" data-title="Full Name">	
							</div>
							<div class="cell myDiv" data-title="Full Name">	
								</div><div class="cell sow" data-title="Full Name">	
								</div><div class="cell harvest" data-title="Full Name">	
								</div>
						</div>

						
						

					</div>
			</div>
		</div>
	</div>


	



@endsection