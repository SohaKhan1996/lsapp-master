@extends('layouts.app')
@section('content')

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<section class="bg-faded container-fluid">
  <div class="row py-3 flex-items-sm-center">
    <!--
User Card
-->
    <div class="col-xs-12 col-sm-3 py-2 clearfix">
      <div class="card profile-card">
        <figure>
      
          <!--<input id="fab" type="checkbox" class="fab"><label for="fab" class="toggle"></label>-->
          <img src="/images/profile1.jpg" class="img-fluid img-profile" alt="Card image">
        </figure>
        <div class="card-block text-xs-center">
          <p class="h4 card-title font-weight-bold">Mr ABC</p>
          <p class="h6 card-subtitle text-muted"> Served as a public gardener in the horticulture department

          </p><br>
          <p class="h6 card-subtitle text-muted"> 10 Years of experience </p>
          <br>

          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <hr>
      
          <button type="fab" class="btn btn-primary" onclick="window.location='{{ url("services/profiles/gardener") }}'" style="background:rgb(219,120,122); width:100px">View profile</button>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection