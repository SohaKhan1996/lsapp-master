
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
                    <h3>Design your Row or Bed</h3>
                        <br>
                        <div style="align: right;" >
                           <h4> 1. Select your size</h4>
                        <div class=" row">
                            <div class="col-md-1">
                                    <p>Width</p>
                            </div>
                            
                            <div class="col-md-2">
                                <form>
                                    <select id="widthSelect" onchange="fw()">
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
                                 <p>Length</p>
                             </div>
                             <div class="col-md-4">
                                <form>
                                    <select id="lengthSelect" onchange="fw()">
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
                              <br>
                    <div class=" row">
                            {{-- <div class="col-md-8"> --}}
                    <h4>   2. Drag and drop item onto bed</h4>
                   @include('pages.slick')
                            {{-- </div> --}}
                    </div>
                </div>
        <p id="demo"></p>
        <br><hr>
        </div>
    <div id="main" ></div>               
    </div>
</div>
        <script>
           divgenerate(2,2);
            function fw() {
                $('#main div').remove();
                x= document.getElementById("widthSelect").value;
                y= document.getElementById("lengthSelect").value;
                divgenerate(x,y)
            }
            function divgenerate(x,y){
                var i,j,bed;
                for(j=0;j<y;j++){  //length    
                    for(i=0;i<x-1;i++){  //width
                        bed=document.createElement("div")
                        bed.style.width = "90px";
                        bed.style.height = "90px";
                        bed.style.border = "solid 1px";
                        bed.style.padding = "0%";
                        bed.style.margin = "0%";
                        bed.className="col-md-2";
                        document.getElementById('main').appendChild(bed);                 
                 }
                    bed=document.createElement("div")
                    bed.style.width = "90px";
                    bed.style.height = "90px";
                    bed.style.border = "solid 1px";
                    bed.className="row";
                    document.getElementById('main').appendChild(bed);  
                    }
                }
            </script>
	</section>

	@endsection