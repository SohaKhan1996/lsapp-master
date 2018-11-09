@extends('layouts.app')
@section('content')
<hr>
<div class="container">
	<div class="row">
		{{-- <form method="get">
		<div class="form-group">
   
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/tomato.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="tomato1" value="val1" class="hidden" autocomplete="off"></label></div>
        
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/carrot.png" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="carrot1" value="val2" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/garlic.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="garlic" value="val3" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/cucumber.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="cucumber" value="val4" class="hidden" autocomplete="off"></label></div>
		<div class="col-md-2 box"><label class="btn btn-primary"><img src="/images/seed/potato.png" alt="..." class="img-thumbnail img-check"><input type="radio" name="chk1" id="potato" value="val4" class="hidden" autocomplete="off"></label></div>
		</div>
		<div class="clearfix"></div>
		

       <!--<button onclick="myFunction()">Proceed</button>-->
       <!--<button type="button" onclick="window.location='{{ url("kitchen-garden/get-started"."id") }}'">Proceed</button>-->
	<input type="submit" value="Proceed" class="btn btn-success">
		
		</form> --}}
		{{-- <div class= "options"> --}}
				<div class="container">
			<h3 style="text-align:center;">Select the crops for your Garden</h3>
				</div>
			<hr>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				{{-- <h3>Vegetables</h3> --}}
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
						<img src="/images/seed/tomato.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Tomato
						</a>

						<span class="block2-price m-text6 p-r-5">
							$75.00
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative">
						<img src="/images/seed/carrot.png" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Carrot
						</a>

						<span class="block2-price m-text6 p-r-5">
							$92.50
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative">
						<img src="/images/seed/garlic.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Garlic
						</a>

						<span class="block2-price m-text6 p-r-5">
							$165.90
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
						<img src="/images/seed/cucumber.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Cucumber
						</a>

						<span class="block2-oldprice m-text7 p-r-5">
							$29.50
						</span>

						<span class="block2-newprice m-text8 p-r-5">
							$15.90
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
						<img src="/images/seed/cucumber.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Cucumber
						</a>

						<span class="block2-oldprice m-text7 p-r-5">
							$29.50
						</span>

						<span class="block2-newprice m-text8 p-r-5">
							$15.90
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
						<img src="/images/seed/cucumber.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Cucumber
						</a>

						<span class="block2-oldprice m-text7 p-r-5">
							$29.50
						</span>

						<span class="block2-newprice m-text8 p-r-5">
							$15.90
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
						<img src="/images/seed/potato.png" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Potato
						</a>

						<span class="block2-price m-text6 p-r-5">
							$75.00
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative">
						<img src="images/item-14.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Denim jacket blue
						</a>

						<span class="block2-price m-text6 p-r-5">
							$92.50
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
						<img src="images/item-06.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Herschel supply co 25l
						</a>

						<span class="block2-price m-text6 p-r-5">
							$75.00
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative">
						<img src="images/item-08.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Denim jacket blue
						</a>

						<span class="block2-price m-text6 p-r-5">
							$92.50
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative">
						<img src="images/item-10.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Coach slim easton black
						</a>

						<span class="block2-price m-text6 p-r-5">
							$165.90
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
						<img src="images/item-11.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Frayed denim shorts
						</a>

						<span class="block2-oldprice m-text7 p-r-5">
							$29.50
						</span>

						<span class="block2-newprice m-text8 p-r-5">
							$15.90
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
						<img src="images/item-12.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Herschel supply co 25l
						</a>

						<span class="block2-price m-text6 p-r-5">
							$75.00
						</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative">
						<img src="images/item-15.jpg" alt="IMG-PRODUCT">

						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="/product-detail" class="block2-name dis-block s-text3 p-b-5">
							Denim jacket blue
						</a>

						<span class="block2-price m-text6 p-r-5">
							$92.50
						</span>
					</div>
				</div>
			</div>
		</div>

		{{-- <!-- Pagination -->
		<div class="pagination flex-m flex-w p-t-26">
			<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
		</div> --}}
	</div>
</div>
</div>
	</div>	
</div>


</body>
</html>

@endsection