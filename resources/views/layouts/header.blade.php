<!-- Header -->
<header class="header2">
		<!-- Header desktop -->		
		<div class="container-menu-header-v2 p-t-26" style="background-color: white;">				
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>
	
				<!-- Logo2 -->
				<a href="/" class="logo2">
					<img src="/images/icons/logo.png" alt="IMG-LOGO">
				</a>
	
				<div class="topbar-child2">
						<div class="header-wrapicon2 m-r-13">
								<img src="{{url('/images/icons/icon-header-01.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						</div>	
						@if (Auth::guest())
						<li><a href="{{ route('login') }}">Login</a></li>
						<span class="linedivide1"></span>
						<li><a href="{{ route('register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->name }}
							</a>
	
							<ul class="dropdown-menu" role="menu">
								<li>
										<a href="/dashboard">
											Dashboard
										</a>
									</li>
								<li>
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
										Logout
									</a>
	
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
					@endif
					
	
					<span class="linedivide1"></span>
	
					<div class="header-wrapicon2 m-r-13">
						<img src="/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>
	
						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="/images/item-cart-01.jpg" alt="IMG">
									</div>
	
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>
	
										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>
	
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="/images/item-cart-02.jpg" alt="IMG">
									</div>
	
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>
	
										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>
	
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="/images/item-cart-03.jpg" alt="IMG">
									</div>
	
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>
	
										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>
	
							<div class="header-cart-total">
								Total: $75.00
							</div>
	
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('cart.index')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>
	
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('layouts.nav')
				<div class="header-icons">

				</div>
			</div>
		</div>

			<!-- Header Mobile -->
			<div class="wrap_header_mobile">
				<!-- Logo moblie -->
				<a href="/" class="logo-mobile">
					<img src="/images/icons/logo.png" alt="IMG-LOGO">
				</a>
	
				<!-- Button show menu -->
				<div class="btn-show-menu">
					<!-- Header Icon mobile -->
					<div class="header-icons-mobile">
						<a href="#" class="header-wrapicon1 dis-block">
							<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						</a>
						@if (Auth::guest())
						<li><a href="{{ route('login') }}">Login</a></li>
						<span class="linedivide1"></span>
						<li><a href="{{ route('register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->name }}
							</a>
	
							<ul class="dropdown-menu" role="menu">
								<li>
										<a href="/dashboard">
											Dashboard
										</a>
									</li>
								<li>
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
										Logout
									</a>
	
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
					@endif

	
						<span class="linedivide2"></span>
	
						<div class="header-wrapicon2">
							<img src="/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
							<span class="header-icons-noti">0</span>
	
							<!-- Header cart noti -->
							<div class="header-cart header-dropdown">
								<ul class="header-cart-wrapitem">
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<img src="/images/item-cart-01.jpg" alt="IMG">
										</div>
	
										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												White Shirt With Pleat Detail Back
											</a>
	
											<span class="header-cart-item-info">
												1 x $19.00
											</span>
										</div>
									</li>
	
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<img src="/images/item-cart-02.jpg" alt="IMG">
										</div>
	
										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												Converse All Star Hi Black Canvas
											</a>
	
											<span class="header-cart-item-info">
												1 x $39.00
											</span>
										</div>
									</li>
	
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<img src="/images/item-cart-03.jpg" alt="IMG">
										</div>
	
										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												Nixon Porter Leather Watch In Tan
											</a>
	
											<span class="header-cart-item-info">
												1 x $17.00
											</span>
										</div>
									</li>
								</ul>
	
								<div class="header-cart-total">
									Total: $75.00
								</div>
	
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="{{route('cart.index')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											View Cart
										</a>
									</div>
	
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Check Out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
	
					<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</div>
				</div>
			</div>
			
			<!-- Menu Mobile -->
		@include('layouts.navmob')
		</header>
	