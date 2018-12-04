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
								<img class="Img" src="/images/seed/carrot.png" align="right" alt="IMG-PRODUCT">	
							</div>
							<div class="cell" data-title="Age">
								Carrot 
							</div>
							<div class="cell" data-title="Job Title">
								<img class="Img" src="/images/icons/climber.png" align="right" alt="IMG-PRODUCT">
									
							</div>
							<div class="cell" data-title="Full Name">
								<img class="sunImg" src="/images/icons/partial.png" align="right" alt="IMG-PRODUCT">
								</div>
								<div class="cell" data-title="Age">
									<img  src="/images/icons/minwater.png" align="right" alt="IMG-PRODUCT" >
								</div>
								<div class="cell" data-title="Age">
										31
								</div>
								<div class="cell" data-title="Age">
									31
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

						
						

					</div>
			</div>
		</div>
	</div>


	



@endsection