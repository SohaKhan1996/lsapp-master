
<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
						<!-- Search -->
						<br>
						<div class="pos-relative bo11 of-hidden">
							<input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search">

							<button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
								<i class="fs-13 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>

						<!-- Categories -->
						<h4 class="m-text14 p-b-7">
								Categories
						</h4>
						<ul class="p-b-54">
							@foreach($categories as $category)
							<li class="p-t-4">
							<a href="{{route('shop.index' , ['category'=>$category->slug])}}" class="s-text13 active1">
									{{$category->name}}
								</a>
							</li>
							@endforeach
						</ul>
						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
							Featured Products
						</h4>
                        
						<ul class="bgwhite">
                             @foreach($products as $product)
                                <li class="flex-w p-b-20">
                                    <a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                            <img src="{{asset('/images/products/'.$product->slug.'.jpg')}}" alt="IMG-PRODUCT">
                                    </a>

                                    <div class="w-size23 p-t-5">
                                            <a href="{{route('shop.show',['product' => $product->slug])}}" class="block2-name dis-block s-text3 p-b-5">
                                                {{$product->name}}
                                            </a>

                                        <span class="dis-block s-text17 p-t-6">
                                                {{"Rs.".$product->price. ".00"}}
                                        </span>
                                    </div>
                                </li>
                            @endforeach							
						</ul>

						<!-- Archive -->
						<h4 class="m-text23 p-t-50 p-b-16">
							Archive
						</h4>

						<ul>
							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									July 2018
								</a>

								<span class="s-text13">
									(9)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									June 2018
								</a>

								<span class="s-text13">
									(39)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									May 2018
								</a>

								<span class="s-text13">
									(29)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									April  2018
								</a>

								<span class="s-text13">
									(35)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									March 2018
								</a>

								<span class="s-text13">
									(22)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									February 2018
								</a>

								<span class="s-text13">
									(32)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									January 2018
								</a>

								<span class="s-text13">
									(21)
								</span>
							</li>

							<li class="flex-sb-m">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									December 2017
								</a>

								<span class="s-text13">
									(26)
								</span>
							</li>
						</ul>

						<!-- Tags -->
						<h4 class="m-text23 p-t-50 p-b-25">
							Tags
						</h4>

						<div class="wrap-tags flex-w">
							<a href="#" class="tag-item">
								Fashion
							</a>

							<a href="#" class="tag-item">
								Lifestyle
							</a>

							<a href="#" class="tag-item">
								Denim
							</a>

							<a href="#" class="tag-item">
								Streetstyle
							</a>

							<a href="#" class="tag-item">
								Crafts
							</a>
						</div>
					</div>
				</div>