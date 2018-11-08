@extends('layouts.app')
@section('content')

<div class="container" >
		<h3 style="text-align:center;">Select the food</h3>
	<div class="row">
		<form method="get">
		<div class="form-group">
   
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/tomato.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label></div>
        
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/carrot.png" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="item4" value="val2" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/garlic.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="item4" value="val3" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/cucumber.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="item4" value="val4" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/potato.png" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="item4" value="val4" class="hidden" autocomplete="off"></label></div>
		</div>
		<div class="clearfix"></div>
		
		<div class="container"  style="text-align:center;" >
		<input type="submit" value="Proceed" class="btn btn-primary" >
		</div>
		</form>
	</div>	
</div>
<hr>
</body>
</html>

@endsection