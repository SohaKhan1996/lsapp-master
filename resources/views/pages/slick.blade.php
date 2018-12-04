<style>
    ul.images {
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: row;
      width: 900px;
      overflow-x: auto;
    }

    .scrollList{
      background: "white";
    }
    
    ul.images li {
      flex: 0 0 auto;
      width: 150px;
      height: 150px;
    }
</style>
<ul class="images" id="Crops">
        <!-- Inline styles added for demonstration purposes only. -->
        <li id="veg1"><img class="Img" id="img1" src="/images/seed/arun.jpg" draggable="true" ondragstart="drag(event)" ></li>
        <li id="veg2"><img class="Img" id="img2" src="/images/seed/brinjal.jpg" draggable="true" ondragstart="drag(event)" ></li>
        <li id="veg3"><img class="Img" id="img3" src="/images/seed/brocoli.jpg" draggable="true" ondragstart="drag(event)" ></li>
        <li id="veg4"><img class="Img" id="img4" src="/images/seed/carrot.png" draggable="true" ondragstart="drag(event)" ></li>
        <li><img class="Img" id="img5" src="/images/seed/celery.jpg" draggable="true" ondragstart="drag(event)" ></li>
        <li><img class="Img" id="img6" src="/images/seed/coriander.jpg" draggable="true" ondragstart="drag(event) "></li>
        <li><img class="Img" id="img7" src="/images/seed/cucumber.jpg" draggable="true" ondragstart="drag(event)"></li>
        <li><img class="Img" id="img8" src="/images/seed/fenugreek.jpg" draggable="true" ondragstart="drag(event)"></li>
        <li><img class="Img" id="img9" src="/images/seed/garlic.jpg" draggable="true" ondragstart="drag(event)"></li>
        <li><img class="Img" id="img10" src="/images/seed/lettuce.jpg" draggable="true" ondragstart="drag(event)"></li>
     
      </ul>
    
{{--     
         <div><img class="slickh3 Img" id="img1" src="/images/seed/arun.jpg" draggable="true" ondragstart="drag(event)">
                </div>
                <div><img class="slickh3 Img" id="img2" src="/images/seed/brinjal.jpg" draggable="true" ondragstart="drag(event)"></div>
                <div><img class="slickh3 Img" src="/images/seed/brocoli.jpg"></div>
                <div><img class="slickh3 Img" src="/images/seed/carrot.png"></div>
                <div><img class="slickh3 Img" src="/images/seed/celery.jpg"></div>             
                <div><img class="slickh3 Img" src="/images/seed/coriander.jpg"></div>  
                <div><img class="slickh3 Img" src="/images/seed/cucumber.jpg"></div>
                <div><img class="slickh3 Img" src="/images/seed/fenugreek.jpg"></div>   
                <div><img class="slickh3 Img" src="/images/seed/garlic.jpg"></div>  
                <div><img class="slickh3 Img" src="/images/seed/lettuce.jpg"></div>        
                <div><img class="slickh3 Img" src="/images/seed/okra_ind.jpg"></div>  
                <div><img class="slickh3 Img" src="/images/seed/onion.jpg"></div>
                <div><img class="slickh3 Img" src="/images/seed/peas.jpg"></div>        
                <div><img class="slickh3 Img" src="/images/seed/potato.png"></div>  
                <div><img class="slickh3 Img" src="/images/seed/radish.jpg"></div>
                <div><img class="slickh3 Img" src="/images/seed/spinach.jpg"></div>   
                <div><img class="slickh3 Img" src="/images/seed/sponge_gourd.png"></div>  
                <div><img class="slickh3 Img" src="/images/seed/sweetPeppers.jpg"></div>        
                <div><img class="slickh3 Img" src="/images/seed/sweetpotato.jpg"></div>  
                <div><img class="slickh3 Img" src="/images/seed/tindaGourd.jpg"></div>
                <div><img class="slickh3 Img" src="/images/seed/tomato.jpg"></div>        
                <div><img class="slickh3 Img" src="/images/seed/turmeric.jpg"></div>  
                <div><img class="slickh3 Img" src="/images/seed/turnip.jpg"></div>
             --}}
 
 <script> function allowDrop(ev) {
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


</script>