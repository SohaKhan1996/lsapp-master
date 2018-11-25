@extends('layouts.app')
@section('content')
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>
	
	
	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
			
		<div class="container">
				<div>
						@if (session()->has('success_message'))
							<div class="alert alert-success">
								{{session()->get('success_message')}}
							</div>
						@endif
			
						@if(count($errors)>0)
							<div class="alert alert-danger">
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error}}</li>
									@endforeach
								</ul>
							</div>
						@endif	
					</div>
			<!-- Cart item -->
			@if(Cart::count() > 0)
				<h2>{{ Cart::count()}} items in Shopping Cart  </h2>
				
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">		
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-1"></th>
							<th class="column-5">Total</th>
						</tr>
						@foreach (Cart::content() as $item)
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
								<a href="{{route('shop.show', $item->model->slug) }}"><img src="{{asset('/images/products/'.$item->model->slug.'.jpg')}}" alt="IMG-PRODUCT"></a>
								</div>
							</td>
						<td class="column-2"><a href="{{route('shop.show', $item->model->slug)}}">{{$item->model->name}}</a></td>
							<td class="column-3">{{"Rs. " . $item->model->price . ".00"}}</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
									
								</div>
								
							</td>
							<td class="column-1">
								<form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
									{{ csrf_field()}}
									{{ method_field('DELETE')}}
								<button type="submit" class="cart-options">
									<span class="glyphicon">&#xe020;</span> Remove
								</button>
								</form>
								<form action="{{route('cart.switchToSaveForLater', $item->rowId)}}" method="POST">
										{{ csrf_field()}}
									<button type="submit" class="cart-options">
											Save for later
									</button>
									</form>
								
								</td>
							<td class="column-5">$36.00</td>
						</tr>
						@endforeach
						
					</table>
				</div>
			</div>

			
			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Update Cart
					</button>
				</div>
			</div>

			
			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						{{Cart::subtotal()}}<br>
						
					</span>
					<span class="s-text18 w-size19 w-full-sm">
							Tax:
						</span>
	
						<span class="m-text21 w-size20 w-full-sm">
							
							{{Cart::tax()}}
						</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>

						<span class="s-text19">
							Calculate Shipping
						</span>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="selection-2" name="country">
								<option>Select a country...</option>
								<option>US</option>
								<option>UK</option>
								<option>Japan</option>
							</select>
						</div>

						<div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
						</div>

						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						{{Cart::total()}}
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
				@else
					<h3>No items in Cart</h3>
					<br>
							<!-- Button -->
							<a href="{{route('shop.index')}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Continue Shopping
							</a>
						
				@endif

				
			</div>
			<div>
					@if (session()->has('success_message'))
						<div class="alert alert-success">
							{{session()->get('success_message')}}
						</div>
					@endif
		
					@if(count($errors)>0)
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li>{{$error}}</li>
								@endforeach
							</ul>
						</div>
					@endif	
				</div>
			{{-- Save for later --}}
			@if(Cart::instance('saveForLater')->count() > 0)
			<h2>{{ Cart::instance('saveForLater')->count()}} items Saved for Later  </h2>
			
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">		
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1"></th>
						<th class="column-2">Product</th>
						<th class="column-3">Price</th>
						<th class="column-4 p-l-70">Quantity</th>
						<th class="column-1"></th>
						<th class="column-5">Total</th>
					</tr>
					@foreach (Cart::instance('saveForLater')->content() as $item)
					<tr class="table-row">
						<td class="column-1">
							<div class="cart-img-product b-rad-4 o-f-hidden">
							<a href="{{route('shop.show', $item->model->slug) }}"><img src="{{asset('/images/products/'.$item->model->slug.'.jpg')}}" alt="IMG-PRODUCT"></a>
							</div>
						</td>
					<td class="column-2"><a href="{{route('shop.show', $item->model->slug)}}">{{$item->model->name}}</a></td>
						<td class="column-3">{{"Rs. " . $item->model->price . ".00"}}</td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
								
							</div>
							
						</td>
						<td class="column-1">
							
							<form action="{{route('saveForLater.destroy', $item->rowId)}}" method="POST">
									{{ csrf_field()}}
									{{ method_field('DELETE')}}
								<button type="submit" class="cart-options">
										<span class="glyphicon">&#xe020;</span> Remove
								</button>
								</form>
								<form action="{{route('saveForLater.switchToCart', $item->rowId)}}" method="POST">
										{{ csrf_field()}}
									<button type="submit" class="cart-options">
											Move To Cart
									</button>
									</form>
							</td>
						<td class="column-5">$36.00</td>
					</tr>
					@endforeach
					
				
			
			@else
				<div class="container">
					<h3>You have no items saved for later</h3>
				</div>
				@endif
			</table>
			</div>
		</div>


		</div>
		
	</div>

	</section>


@endsection

{{-- @section('extra-js')
	<script>
		(function){

		}
	</script>
@endsection --}}