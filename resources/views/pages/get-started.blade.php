@extends('layouts.app')
@section('content')

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class= "options">
  <div class = "option-text">
<div class="container-fluid">
 
  <!--<h1>Hello World!</h1>-->
  <!--<p>Resize the browser window to see the effect.</p>-->
  <div class="row">
  <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
            <button type="button" onclick="window.location='{{ url("kitchen-garden/get-started/vegetables") }}'">Vegetables</button>
            <div class="panel-body"> <br><img src="/images/vegnherb.jpg" class= "img-thumb">
            </div>
            </div>
        </div>
 <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
            <button type="button" onclick="window.location='{{ url("kitchen-garden/get-started/fruits") }}'">Fruits</button>
            <div class="panel-body"> <br><img src="/images/fruits.jpg" class= "img-thumb">
            
            </div>
            </div>
        </div>
<div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
            <button type="button" onclick="window.location='{{ url("kitchen-garden/get-started/inseason") }}'">In season</button>
            <div class="panel-body"> <br><img src="/images/fnv.jpg" class= "img-thumb">
            </div>
            </div>
        </div>
    </div>
</div>

   <!-- <div class="col-xs-6 " style="background-color:grey;">In Season</div>
    <div class="col-xs-6 " style="background-color:grey;">Fruits</div>
    <div class="col-xs-6 " style="background-color:grey;">Vegetables</div>
    <div class="col-xs-6 " style="background-color:grey;">Herbs</div>-->
  </div>
  
</div>
    
</body>
</html>

@endsection
