<style>
    ul.images {
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: row;
      width: 900px;
      overflow-x: auto;
    }
  /* vegimg{
    height:30px;
    width:auto;
    padding-bottom: 85px;
  } */
    
    ul.images li {
      flex: 0 0 auto;
      width: 80px;
      height: 90px;
    }
</style>
<ul class="images" id="Crops">
        <!-- Inline styles added for demonstration purposes only. -->
        <li id="veg1"><img  id="img1" src="/images/seed/alpine_strawberry.png" draggable="true" ondragstart="drag(event)" ></li>
        <li id="veg2"><img  id="img2" src="/images/seed/arugula.png" draggable="true" ondragstart="drag(event)" ></li>
        <li id="veg3"><img  id="img3" src="/images/seed/asian_eggplant.png" draggable="true" ondragstart="drag(event)" ></li>
        <li id="veg4"><img  id="img4" src="/images/seed/basil.png" draggable="true" ondragstart="drag(event)" ></li>
        <li><img  id="img5" src="/images/seed/beets.png" draggable="true" ondragstart="drag(event)" ></li>
        <li><img  id="img6" src="/images/seed/bokchoy.png" draggable="true" ondragstart="drag(event) "></li>
        <li><img  id="img7" src="/images/seed/broccoli.png" draggable="true" ondragstart="drag(event)"></li>
        <li><img  id="img8" src="/images/seed/brussels_sprouts.png" draggable="true" ondragstart="drag(event)"></li>
        <li><img  id="img9" src="/images/seed/bush_beans.png" draggable="true" ondragstart="drag(event)"></li>
        <li><img  id="img10" src="/images/seed/calendula.png" draggable="true" ondragstart="drag(event)"></li>
        <li><img  id="img11" src="/images/seed/carrots.png" draggable="true" ondragstart="drag(event)"></li>
        <li><img  id="img12" src="/images/seed/cauliflower.png" draggable="true" ondragstart="drag(event)"></li>
        <li><img  id="img13" src="/images/seed/celery.png" draggable="true" ondragstart="drag(event)"></li>
        <li><img  id="img14" src="/images/seed/cherry_tomato.png" draggable="true" ondragstart="drag(event)"></li>
        <li><img  id="img15" src="/images/seed/chives.png" draggable="true" ondragstart="drag(event)"></li>
        <li><img  id="img16" src="/images/seed/cilantro.png" draggable="true" ondragstart="drag(event)"></li>
        
        

     
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