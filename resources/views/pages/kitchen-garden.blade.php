@extends('layouts.app')
@section('content')
<!-- hero image-->


  <div class="hero-image">
  <div class="hero-text">
    
    <h2>   Fresh & Healthy Home Grown Vegetables  </h2>
    <div class="lg p-4 mb-4">
   <button class="btn btn-primary" type="button" onclick="window.location='{{ url("kitchen-garden/gardenplanner") }}'">Get started</button>
   <!--<a href="{ url('/kitchen-garden/'. '/get-started') }" class="btn btn-xs btn-info pull-centers">Get started</a>-->
    </div>
  </div>
 </div>




@endsection