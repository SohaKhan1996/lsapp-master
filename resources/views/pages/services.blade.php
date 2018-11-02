@extends('layouts.app')
@section('content')


 <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<!--Left side bar-->
<div class="col-lg-6"></div>


<div class="container">
  <h2>Hire an Expert</h2>
  <form>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name">
    </div>    
    <div class="form-group">
      <label for="Name">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>  
    <div class="form-group">
      <label for="Contact">Contact:</label>
      <input type="number" class="form-control" id="email"  placeholder="Enter in the format +92xxxxxxxxxx">
    </div>  

     <!--google map-->
     <label for="googleMap">Please set your location</label>
     <div id="googleMap" style="width:100%;height:400px;"></div>
     
    <!-- fields in which you need help-->
    <label for="checkbox">What do you need assistance in?</label>
    <div class="checkbox">
    <label><input type="checkbox" value="">Landscaping </label>
    </div>
    <div class="checkbox">
    <label><input type="checkbox" value="">Pest Controll and fertilizing</label>
   </div>
   <div class="checkbox">
    <label><input type="checkbox" value="">Pruning hedges and shrubs</label>
   </div>
   <div class="checkbox">
    <label><input type="checkbox" value="">General Maintenance </label>
   </div>
   <div class="checkbox">
    <label><input type="checkbox" value="">Kitchen gardening</label>
   </div>
   <div class="checkbox">
    <label><input type="checkbox" value="">Installation</label>
   </div>
   <!--< div class="checkbox disabled">
   <label><input type="checkbox" value="" disabled>Option 3</label>
   </div>-->
<br>

   <!-- <div class="checkbox">

      <label><input type="checkbox" > I agree to the rules and condition</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>-->

<input type="submit" class="btn btn-info" value="Submit Button">

</body> 
<script>
    function myMap() {
     var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
       };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
<!--right side bar-->
<div class="col-lg-6"></div>
</html>


   <!-- <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif-->
@endsection