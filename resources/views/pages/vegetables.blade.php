@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<form method="get">
		<div class="form-group">
   
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/tomato.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="tomato1" value="val1" class="hidden" autocomplete="off"></label></div>
        
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/carrot.png" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="carrot1" value="val2" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/garlic.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="garlic" value="val3" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/cucumber.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="cucumber" value="val4" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/potato.png" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="potato" value="val4" class="hidden" autocomplete="off"></label></div>
		</div>
		<div class="clearfix"></div>
		

       <!--<button onclick="myFunction()">Proceed</button>-->
       <!--<button type="button" onclick="window.location='{{ url("kitchen-garden/get-started"."id") }}'">Proceed</button>-->
	<input type="submit" value="Proceed" class="btn btn-success">
		
		</form>
	</div>	
</div>


</body>
</html>

@endsection