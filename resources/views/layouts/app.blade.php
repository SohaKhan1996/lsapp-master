<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/default.css" />
    <link rel="stylesheet" type="text/css" href="/css/component.css" />
    <script src="/js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="{{ URL::asset('images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/themify/themify-icons.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/elegant-font/html-css/style.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/lightbox2/css/lightbox.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
<!--===============================================================================================-->
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="animsition", style="background-color: white;">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    {{-- @yield('extra-js') --}}
        
        <!-- Back to top -->
        <div class="btn-back-to-top bg0-hov" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="fa fa-angle-double-up" aria-hidden="true"></i>
            </span>
        </div>
    
        <!-- Container Selection1 -->
        <div id="dropDownSelect1"></div>

        <script>
            function myMap() {
             var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
               };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
              }
            </script>

<script src="/js/cbpHorizontalSlideOutMenu.min.js"></script>
<script>
    var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
</script>
     <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
     
     <!--===============================================================================================-->
    <script type="text/javascript" src="{{ URL::asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ URL::asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ URL::asset('vendor/bootstrap/js/popper.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ URL::asset('vendor/select2/select2.min.js') }}"></script>
        <script type="text/javascript">
            $(".selection-1").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });
        </script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ URL::asset('vendor/slick/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/slick-custom.js') }}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ URL::asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ URL::asset('vendor/lightbox2/js/lightbox.min.js') }}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{ URL::asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
        <script type="text/javascript">
            $('.block2-btn-addcart').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to cart !", "success");
                });
            });
    
            $('.block2-btn-addwishlist').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");
                });
            });
        </script>
    
    <!--===============================================================================================-->
        <script src="{{ URL::asset('js/main.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
   
