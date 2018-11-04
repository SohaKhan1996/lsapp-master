@extends('layouts.app')
@section('content')

<!--Left side bar-->
{{-- <div class="col-lg-6"></div> --}}
<hr>
<div class="container" ">
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
  
        <br>
        <input type="submit" class="btn btn-info active" value="Submit Button">
    </form>
</div>

<br>

@endsection