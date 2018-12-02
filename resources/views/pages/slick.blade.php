
<link  href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>
<style>/* slick */
        .slickdiv{
          background:#fff;
        }
        .mainslick {
          font-family:Montserrat-Regular;
          width:1500px;
          display:block;
          margin:0 auto;
          background:#fff;
        }
       
        .slickh3 {
            background: #fff;
            color: #3498db;
            font-size: 36px;
            line-height: 100px;
            margin: 10px;
            padding: 2%;
            position: relative;
            text-align: center;
        }
        .actionslick{
          display:block;
          margin:100px auto;
          width:100%;
          text-align:center;
        }
        .actionslick a {
          display:inline-block;
          padding:5px 10px; 
          /* background:#f30; */
          color:#fff;
          text-decoration:none;
        }
        .actionslick a:hover{
          background:#000;
        }
        </style>
        <div class=slickdiv>
        <div class="mainslick">
        
          <div class="slider slider-nav">
                <div><img class="slickh3 Img" src="/images/seed/arun.jpg"></div>
                <div><img class="slickh3 Img" src="/images/seed/brinjal.jpg"></div>
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
            
              
          </div>
        </div>
         
        </div>
        
        <script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
        <script >$('.slider-for').slick({
          slidesToShow: 8,
          slidesToScroll: 3,
          arrows: true,
          fade: true,
          asNavFor: '.slider-nav' });
        
        $('.slider-nav').slick({
          slidesToShow: 8,
          slidesToScroll: 3,
          asNavFor: '.slider-for',
          dots: false,
          focusOnSelect: true });
        
        
        $('a[data-slide]').click(function (e) {
          e.preventDefault();
          var slideno = $(this).data('slide');
          $('.slider-nav').slick('slickGoTo', slideno - 1);
        });
        //# sourceURL=pen.js
        </script>
       