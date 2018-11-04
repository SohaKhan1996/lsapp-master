@extends('layouts.app')
@section('content')
<!-- hero image-->


  <div class="hero-image">
  <div class="hero-text">
    
    <h2>Fresh & Healthy Vegetables</h2>
   <button type="button" onclick="window.location='{{ url("kitchen-garden/get-started") }}'">Get started</button>
   <!--<a href="{ url('/kitchen-garden/'. '/get-started') }" class="btn btn-xs btn-info pull-centers">Get started</a>-->
  </div>
 </div>




@endsection