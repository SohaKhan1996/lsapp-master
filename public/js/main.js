
(function ($) {
    "use strict";

    /*[ Load page ]
    ===========================================================*/
    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 1500,
        outDuration: 800,
        linkElement: '.animsition-link',
        loading: true,
        loadingParentElement: 'html',
        loadingClass: 'animsition-loading-1',
        loadingInner: '<div data-loader="ball-scale"></div>',
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'html',
        transition: function(url){ window.location.href = url; }
    });
    


    
    /*[ Back to top ]
    ===========================================================*/
    var windowH = $(window).height()/2;

    $(window).on('scroll',function(){
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css('display','flex');
        } else {
            $("#myBtn").css('display','none');
        }
    });

    $('#myBtn').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 300);
    });


    /*[ Show header dropdown ]
    ===========================================================*/
    $('.js-show-header-dropdown').on('click', function(){
        $(this).parent().find('.header-dropdown')
    });

    var menu = $('.js-show-header-dropdown');
    var sub_menu_is_showed = -1;

    for(var i=0; i<menu.length; i++){
        $(menu[i]).on('click', function(){ 
            
                if(jQuery.inArray( this, menu ) == sub_menu_is_showed){
                    $(this).parent().find('.header-dropdown').toggleClass('show-header-dropdown');
                    sub_menu_is_showed = -1;
                }
                else {
                    for (var i = 0; i < menu.length; i++) {
                        $(menu[i]).parent().find('.header-dropdown').removeClass("show-header-dropdown");
                    }

                    $(this).parent().find('.header-dropdown').toggleClass('show-header-dropdown');
                    sub_menu_is_showed = jQuery.inArray( this, menu );
                }
        });
    }

    $(".js-show-header-dropdown, .header-dropdown").click(function(event){
        event.stopPropagation();
    });

    $(window).on("click", function(){
        for (var i = 0; i < menu.length; i++) {
            $(menu[i]).parent().find('.header-dropdown').removeClass("show-header-dropdown");
        }
        sub_menu_is_showed = -1;
    });


     /*[ Fixed Header ]
    ===========================================================*/
    var posWrapHeader = $('.topbar').height();
    var header = $('.container-menu-header');

    $(window).on('scroll',function(){

        if($(this).scrollTop() >= posWrapHeader) {
            $('.header1').addClass('fixed-header');
            $(header).css('top',-posWrapHeader); 

        }  
        else {
            var x = - $(this).scrollTop(); 
            $(header).css('top',x); 
            $('.header1').removeClass('fixed-header');
        } 

        if($(this).scrollTop() >= 200 && $(window).width() > 992) {
            $('.fixed-header2').addClass('show-fixed-header2');
            $('.header2').css('visibility','hidden'); 
            $('.header2').find('.header-dropdown').removeClass("show-header-dropdown");
            
        }  
        else {
            $('.fixed-header2').removeClass('show-fixed-header2');
            $('.header2').css('visibility','visible'); 
            $('.fixed-header2').find('.header-dropdown').removeClass("show-header-dropdown");
        } 

    });
    
    /*[ Show menu mobile ]
    ===========================================================*/
    $('.btn-show-menu-mobile').on('click', function(){
        $(this).toggleClass('is-active');
        $('.wrap-side-menu').slideToggle();
    });

    var arrowMainMenu = $('.arrow-main-menu');

    for(var i=0; i<arrowMainMenu.length; i++){
        $(arrowMainMenu[i]).on('click', function(){
            $(this).parent().find('.sub-menu').slideToggle();
            $(this).toggleClass('turn-arrow');
        })
    }

    $(window).resize(function(){
        if($(window).width() >= 992){
            if($('.wrap-side-menu').css('display') == 'block'){
                $('.wrap-side-menu').css('display','none');
                $('.btn-show-menu-mobile').toggleClass('is-active');
            }
            if($('.sub-menu').css('display') == 'block'){
                $('.sub-menu').css('display','none');
                $('.arrow-main-menu').removeClass('turn-arrow');
            }
        }
    });


    /*[ remove top noti ]
    ===========================================================*/
    $('.btn-romove-top-noti').on('click', function(){
        $(this).parent().remove();
    })


    /*[ Block2 button wishlist ]
    ===========================================================*/
    $('.block2-btn-addwishlist').on('click', function(e){
        e.preventDefault();
        $(this).addClass('block2-btn-towishlist');
        $(this).removeClass('block2-btn-addwishlist');
        $(this).off('click');
    });

    /*[ +/- num product ]
    ===========================================================*/
    $('.btn-num-product-down').on('click', function(e){
        e.preventDefault();
        var numProduct = Number($(this).next().val());
        if(numProduct > 1) $(this).next().val(numProduct - 1);
    });

    $('.btn-num-product-up').on('click', function(e){
        e.preventDefault();
        var numProduct = Number($(this).prev().val());
        $(this).prev().val(numProduct + 1);
    });


    /*[ Show content Product detail ]
    ===========================================================*/
    $('.active-dropdown-content .js-toggle-dropdown-content').toggleClass('show-dropdown-content');
    $('.active-dropdown-content .dropdown-content').slideToggle('fast');

    $('.js-toggle-dropdown-content').on('click', function(){
        $(this).toggleClass('show-dropdown-content');
        $(this).parent().find('.dropdown-content').slideToggle('fast');
    });


    /*[ Play video 01]
    ===========================================================*/
    var srcOld = $('.video-mo-01').children('iframe').attr('src');

    $('[data-target="#modal-video-01"]').on('click',function(){
        $('.video-mo-01').children('iframe')[0].src += "&autoplay=1";

        setTimeout(function(){
            $('.video-mo-01').css('opacity','1');
        },300);      
    });

    $('[data-dismiss="modal"]').on('click',function(){
        $('.video-mo-01').children('iframe')[0].src = srcOld;
        $('.video-mo-01').css('opacity','0');
    });

})(jQuery);

// jeweler

(function ($) {
    "use strict";
   
       /*----------------------------
        jQuery MeanMenu
       ------------------------------ */
       jQuery('nav#dropdown').meanmenu();	
       /*----------------------------
        jQuery myTab
       ------------------------------ */
       $('#myTab a').click(function (e) {
             e.preventDefault()
             $(this).tab('show')
           });
           $('#myTab3 a').click(function (e) {
             e.preventDefault()
             $(this).tab('show')
           });
           $('#myTab4 a').click(function (e) {
             e.preventDefault()
             $(this).tab('show')
           });
   
         $('#single-product-tab a').click(function (e) {
             e.preventDefault()
             $(this).tab('show')
           });
       
       $('[data-toggle="tooltip"]').tooltip(); 
       
       $('#sidebarCollapse').on('click', function () {
                        $('#sidebar').toggleClass('active');
                        
                    });
           // Collapse ibox function
               $('#sidebar ul li').on('click', function () {
                   var button = $(this).find('i.fa.indicator-mn');
                   button.toggleClass('fa-plus').toggleClass('fa-minus');
                   
               });
       /*-----------------------------
               Menu Stick
           ---------------------------------*/
           $(".sicker-menu").sticky({topSpacing:0});
               
           $('#sidebarCollapse').on('click', function () {
               $("body").toggleClass("mini-navbar");
               SmoothlyMenu();
           });
           $(document).on('click', '.header-right-menu .dropdown-menu', function (e) {
                 e.stopPropagation();
               });
    
       
   /*----------------------------
    wow js active
   ------------------------------ */
    new WOW().init();
    
   /*----------------------------
    owl active
   ------------------------------ */  
     $("#owl-demo").owlCarousel({
         autoPlay: false, 
         slideSpeed:2000,
         pagination:false,
         navigation:true,	  
         items : 4,
         /* transitionStyle : "fade", */    /* [This code for animation ] */
         navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
         itemsDesktop : [1199,4],
         itemsDesktopSmall : [980,3],
         itemsTablet: [768,2],
         itemsMobile : [479,1],
     });
   
   /*----------------------------
    price-slider active
   ------------------------------ */  
         $( "#slider-range" ).slider({
          range: true,
          min: 40,
          max: 600,
          values: [ 60, 570 ],
          slide: function( event, ui ) {
           $( "#amount" ).val( "£" + ui.values[ 0 ] + " - £" + ui.values[ 1 ] );
          }
         });
         $( "#amount" ).val( "£" + $( "#slider-range" ).slider( "values", 0 ) +
          " - £" + $( "#slider-range" ).slider( "values", 1 ) );  
          
   /*--------------------------
    scrollUp
   ---------------------------- */	
       $.scrollUp({
           scrollText: '<i class="fa fa-angle-up"></i>',
           easingType: 'linear',
           scrollSpeed: 900,
           animation: 'fade'
       }); 	   
    
   })(jQuery); 