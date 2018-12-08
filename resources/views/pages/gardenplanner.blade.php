
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
            <div>
			<div class="row">
                    @include('posts.sidebar')
                     
                          
				<div class="col-md-8 col-lg-9 p-b-75" >
                    <h3>Design your Row or Bed</h3>
                        <br>
                        <div style="align: right;" >
                           <h4> 1. Select your size</h4>
                        <div class=" row">
                            <div class="col-md-1">
                                    <p>Width: (sq.ft)</p>
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
                                 <p>Length: (sq.ft)</p>
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
        <hr>
        </div>
    <div id="main" ></div>
    <div id="cropinfo">
            <h3>Planting Guide:</h3>
            <table id="cropinfolist">
                <tbody>
                    <tr>
                    <td id="3"><img src="https://www.gardeners.com/on/demandware.static/-/Library-Sites-SharedLibrary/default/v1543493313450/Articles/kgp/assets/beets_planted.png" alt="Beet, (9)">
                    </td>
                    <td><h3>Beet</h3>
                        <ul>
                            <li>Sow seeds 1/2″ deep directly in garden five to six weeks before last frost.</li>
                            <li>Spacing: Plant seeds 18 per sq. ft., thin to nine plants </li>
                             <li>Plant more in midsummer for a fall harvest</li>
                             <li>Days to harvest: 45 to 60. Frost-hardy. </li>          
                             <li>Hint: The longer you wait to harvest, the bigger the beets. Tops and thinnings are flavorful.</li> 	<li><a href="http://www.gardeners.com/buy/bulls-blood-beet-organic-seeds/8594068.html" style="color: #ff8f1c; margin: 0 0 0 0; text-decoration: underline;">Buy organic beet seeds</a></li> </ul> <a href="/gardening-encyclopedia?asset=7157" target="_new">Learn more about Beet in our Vegetable Encyclopedia</a></td></tr><tr><td id="4"><img src="https://www.gardeners.com/on/demandware.static/-/Library-Sites-SharedLibrary/default/v1543493313450/Articles/kgp/assets/broccoli_planted.png" alt="Broccoli, (1)"></td><td><h3>Broccoli</h3> <ul> 	<li>Sow seeds 1/4″ deep indoors, six weeks before last spring frost. </li> 	<li>Transplant into garden when seedlings have two sets of leaves.</li> 	<li>Spacing: one plant per sq. ft. </li> 	<li>Days to harvest: 50 to 70 days from transplant. Frost-hardy.</li> 	<li>Plant a second broccoli crop eight weeks before first fall frost.</li> 	<li>Hint: Row covers are an effective control for cabbage worms. </li> 	<li><a href="http://www.gardeners.com/buy/belstar-broccoli-organic-seeds/8594069.html" style="color: #ff8f1c; margin: 0 0 0 0;">Buy organic broccoli seeds</a></li> </ul> <a href="/gardening-encyclopedia?asset=7158" target="_new">Learn more about Broccoli in our Vegetable Encyclopedia</a></td></tr><tr><td id="32"><img src="https://www.gardeners.com/on/demandware.static/-/Library-Sites-SharedLibrary/default/v1543493313450/Articles/kgp/assets/arugula_planted.png" alt="Arugula, (16)"></td><td><h3>Arugula</h3> <ul>        <li>Sow seeds directly in garden, 1″ apart and 1/4″ deep, starting four weeks before last frost. </li>        <li>Spacing: Broadcast seed then thin to 16 per sq. ft.</li>        <li>Plant a new crop every two to three weeks until midsummer; sow again in late summer for fall harvest.</li>        <li>Days to harvest: 30 days to full-size leaves; small leaves are ready in 21 days. frost-hardy.</li>        <li>Hint: Fall crops are less bothered by flea beetles; cover spring crops with fabric to minimize damage</li>        </ul> <a href="/gardening-encyclopedia?asset=7186" target="_new">Learn more about Arugula in our Vegetable Encyclopedia</a></td></tr><tr><td id="5"><img src="https://www.gardeners.com/on/demandware.static/-/Library-Sites-SharedLibrary/default/v1543493313450/Articles/kgp/assets/brussels_sprouts_planted.png" alt="Brussels sprouts, (1)"></td><td><h3>Brussels sprouts</h3> <ul>        <li>Start seedlings 1/4″ deep indoors six weeks before last spring frost.</li>        <li>Transplant into garden soon after the last spring frost.</li>        <li>Spacing: one per sq. ft. Plant early season crops nearby to give Brussels sprouts more space later in season. </li>        <li>Very frost-hardy. Harvest after frost for best flavor.</li>        <li>Days to harvest: 90 to 110.</li>        <li>Hint: Cut off growing tip of plants a month before fall frost to get bigger sprouts.</li>        </ul> <a href="/gardening-encyclopedia?asset=7159" target="_new">Learn more about Brussels sprouts in our Vegetable Encyclopedia</a></td></tr></tbody></table>
            </div>          
    </div>
    
</div>

        <script>
            function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}


function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
 }


             function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {

  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
  var copyimg = document.createElement("img");
//   copyimg.className="Img";
  copyimg.draggable="true";
  copyimg.ondragstart="drag(event)";
    var original = document.getElementById(data);
    copyimg.src = original.src;
    // document.getElementById("veg1").appendChild(copyimg);
    var ul = document.getElementById("Crops");
    var lit = document.createElement("li");
   
    lit.appendChild(copyimg);
    $('ul li:empty').replaceWith(lit );
    // li.setAttribute("id", "element4"); // added line
    // ul.appendChild(lit);
//   var nodeCopy = document.getElementById(data).cloneNode(true);
//   nodeCopy.id = "newId"; /* We cannot use the same ID */
//   ev.currentTarget.appendChild(nodeCopy);
}

           divgenerate(2,2);
            function fw() {
                $('#main div').remove();
                x= document.getElementById("widthSelect").value;
                y= document.getElementById("lengthSelect").value;
                divgenerate(x,y)
            }
            // var drop = document.createAttribute("ondrop"); 
            // drop.value = "drop(event)";
            // var dragover = document.createAttribute("allowDrop(event)"); 
            // dragover.value = "drop(event";  
            function divgenerate(x,y){
                var i,j,bed;
                for(j=0;j<y;j++){  //length    
                    for(i=0;i<x-1;i++){  //width
                        bed=document.createElement("div")
                        bed.setAttribute("id", "Div1");
                        bed.style.width = "80px";
                        bed.style.height = "80px";
                        bed.style.border = "solid 0.5px";
                        bed.style.padding = "0%";
                        bed.style.margin = "0%";
                        bed.className="col-md-2";
                        var drop = document.createAttribute("ondrop"); 
                        drop.value = "drop(event)";
                        var dragover = document.createAttribute("ondragover"); 
                        dragover.value = "allowDrop(event)";  
                        bed.setAttributeNode(drop);
                        bed.setAttributeNode(dragover);
                        document.getElementById('main').appendChild(bed);                 
                 }
                            bed=document.createElement("div")
                            bed.setAttribute("id", "Div2");
                            bed.style.padding = "0%";
                            bed.style.margin = "0%";
                            bed.style.width = "80px";
                            bed.style.height = "80px";
                            bed.style.border = "solid 0.5px";
                            bed.className="row";
                            var drop = document.createAttribute("ondrop"); 
                            drop.value = "drop(event)";
                            var dragover = document.createAttribute("ondragover"); 
                            dragover.value = "allowDrop(event)";  
                            bed.setAttributeNode(drop);
                            bed.setAttributeNode(dragover);
                            document.getElementById('main').appendChild(bed);  
                    }
                }
            </script>
	</section>

	@endsection