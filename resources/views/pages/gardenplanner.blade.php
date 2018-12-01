
@extends('layouts.app')

@section('content')
   
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(/images/heading-pages-05.jpg);">
		<h2 class="l-text2 t-center">
			Garden Planner
		</h2>
	</section>
   
	<!-- content page -->
	<section class="bgwhite p-t-0">
        
		<div class="container">
            
			<div class="row">
                    @include('posts.sidebar')
                     
                          
				<div class="col-md-8 col-lg-9 p-b-75" >
                        <br>
                        <div style="align: right;" >
                           <h4> 1. Select your size</h4>
                        <div class=" row">
                            <div class="col-md-1">
                                    <p>Width</p>
                            </div>
                            
                            <div class="col-md-2">
                                <form>
                                    <select id="mySelect">
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </form>
                               </div>
                            
                             <div class="col-md-1">
                                 <p>Height</p>
                             </div>
                             <div class="col-md-4">
                                <form>
                                    <select id="mySelect">
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                     </select>
                                </form>
                             </div>
                             <div class="col-md-2">
                                    <button type="button" class="btn btn-primary" onclick="window.location='{{ url("kitchen-garden/gardenplanner/vegetables") }}'" style="background:rgb(219,120,122); border:rgb(219,120,122)">Next</button>
                             </div>
                        </div>
                              <br>
				
                    <div class=" row">
                            {{-- <div class="col-md-8"> --}}
                    <h4>   2. Drag and drop item onto bed</h4>
                   @include('pages.slick')
                            {{-- </div> --}}
                    </div>
                </div>
            {{-- <script>
                var my = document.getElementById("mySelect");
                 my.oninput = function () {
                var x= document.getElementById("mySelect").value;
                
            </script>
        <p id="demo"></p> --}}
       
        <br>
        <hr>
        <div class=" row">
                {{-- <div class="col-md-8"> --}}
                <div class="chessboard ">
                        @for ($i = 0; $i < 54; $i++)
                            <div class="white"></div>
                        @endfor
                    </div>
                 
                </div>
            </div>
			{{-- </div> --}}
		</div>
	</section>

	@endsection