@extends('layouts.app')
@section('content')


<div class="wrapper container">

<div class="home-hero">
  <div class="feature">
  <h3>Like this?</h3>
    <p> Nothing like a serene sunset</p>
  </div>
  <div class="special">
    <h3>Welcome home!</h3>
    <p>Beautiful flowers to welcome you home</p>

  </div>
  <div class="amazing">
    <!--<h3>10 things you discover when taking a balloon ride.</h3>
    <p>Number 8 will AMAZE you.</p>-->
  </div>
  <div class="news">
    <h3> Like what you see? </h3>

    <br>
    <br>

    <a class="spam-button" href="/spam-machine" onclick="window.location='{{ url("services/profiles/gardener") }}'" > Hire now</a></div>
 </div>
 <!--
  <div class="photos"><h3>Balloon photos</h3>
    <p>I have quite a few.</p></div>
  <div class="cta"><p>Sign up for more information about balloons. </p>
    <a class="spam-button" href="/spam-machine">Sign me up!</a></div>-->
  
 



<div class="form-group c">
  <label for="sel1">Select list the area where you live</label>
  <select class="form-control" id="sel1" style="height:30px; width:30%; border:#f75827d2 " align="middle">
    <option>Clifton</option>
    <option>DHA</option>
    <option >Federal B</option>
    <option>Gulshan</option>
    <option>Johar</option>
    <option>KDA</option>
    <option >Nazimabad</option>
    <option>North Nazimabad</option>
  </select>
</div>

<h4>Why do you want to hire a gardener?</h4>
<div class="radio ">
  <label><input type="radio" name="optradio" checked>Maintenance</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Landscaping</label>
</div>
        <br>
        <button type="button" class="btn btn-primary" onclick="window.location='{{ url("services/profiles") }}'" style="background:rgb(219,120,122); width:100px">Submit</button>

</div>
</div>
</div>

<br>




@endsection