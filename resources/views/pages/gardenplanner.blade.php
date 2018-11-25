
@extends('layouts.app')

@section('content')
   
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-05.jpg);">
		<h2 class="l-text2 t-center">
			Garden Planner
		</h2>
	</section>
   <br>
	<!-- content page -->
	<section class="bgwhite p-t-0">
		<div class="container">
			<div class="row">
                    @include('posts.sidebar')
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
                            <div class="wrap-slick2">
                                    <div class="slick2">
                                        
                                        @foreach($products as $product)
                                        <div class="item-slick2 p-l-15 p-r-15">
                                            <!-- Block2 -->
                                            <div class="block2">
                                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                                    <img src="{{asset('/images/products/'.$product->slug.'.jpg')}}" alt="IMG-PRODUCT">
                                                </div>
                                                 
                            
                                                <div class="block2-txt p-t-20">
                                                    <a href="{{route('shop.show',['product' => $product->slug])}}" class="block2-name dis-block s-text3 p-b-5">
                                                        {{$product->name}}
                                                    </a>
                            
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            
					
				</div>
                <div class="chessboard ">
                        @for ($i = 0; $i < 54; $i++)
                            <div class="white"></div>
                        @endfor
                    </div>
				
			</div>
		</div>
	</section>

	@endsection