{{-- 
<!-- Menu -->
<div class="wrap_menu" , style="background-color: white;">
        <nav class="menu ">
        <ul class="main_menu">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/product">Shop</a>
                
            </li>
            <li>
                <a href="/posts">Blog</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/about">Get Involved</a>
                <ul class="sub_menu">
                    <li><a href="index.html">Regrow and Donate</a></li>
                    <li><a href="home-02.html">Sell Plants from your Garden</a></li>
                    <li><a href="home-03.html">Contribute to Plant Data</a></li>
                </ul>
            </li>
            
            <li>
                <a href="/kitchen-garden">Kitchen Gardening</a>
            </li>
            <li>
                <a href="/services">Services</a>
            </li>
            

            <li>
                <a href="/contact">Contact</a>
            </li>
        </ul>   
    </nav>
</div> --}}

<div class="main ">
				<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
					<div class="cbp-hsinner">
						<ul class="cbp-hsmenu">
								<li>
										<a href="/">Home</a>
									</li>
									<li>
										<a href="/product">Shop</a>
										<ul class="cbp-hssubmenu">
												@foreach($categories as $category)
												<li><a href="{{route('shop.index' , ['category'=>$category->slug])}}" class="s-text13 active1">
														<img src="{{asset('/images/category/'.$category->slug.'.jpg')}}" alt="IMG-PRODUCT"><span>{{$category->name}}</span></a></li>
												@endforeach
											</ul>
									</li>

									<li>
											<a href="/about">Get Involved</a>
											<ul class="cbp-hssubmenu">
													<li><a href="#"><img src="/images/10.png" alt="img10"/><span>Fresh Juice</span></a></li>
													<li><a href="#"><img src="/images/6.png" alt="img06"/><span>Sweet Rum</span></a></li>
													<li><a href="#"><img src="/images/9.png" alt="img09"/><span>Eggy Liquor</span></a></li>
											</ul>
										</li>
									<li>
										<a href="/posts">Blog</a>
									</li>
									<li>
										<a href="/about">About</a>
									</li>
									
									<li>
										<a href="/kitchen-garden">Kitchen Gardening</a>
									</li>
									<li>
										<a href="/services">Services</a>
									</li>
									
{{-- 						
									<li>
										<a href="/contact">Contact</a>
									</li> --}}
							
					</div>
				</nav>
			</div>
    
   