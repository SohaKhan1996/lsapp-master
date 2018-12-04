@extends('layouts.app')
@section('content')

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
  <img src="images/profile1.jpg" alt="John" style="width:100%">
  <h1>Mr. ABC</h1>
  <p class="title">Served 10 years in public horticulture sector</p>
  
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <button type="button" class="btn btn-primary" onclick="window.location='{{ url("services/profiles/gardener") }}'" style="background:rgb(219,120,122); width:100px; align:medium;">View more</button>
</div>
   
@endsection