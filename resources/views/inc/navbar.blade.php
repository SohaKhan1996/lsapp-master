
<nav class="navbar">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="/">Home</a>
                        </li>
            
                        <li>
                            <a href="/product">Shop</a>
                        </li>
            
                        <!--li class="sale-noti">
                            <a href="/product">Sale</a>
                        </li> -->
            
                        <!--<li>
                            <a href="/cart">Features</a>
                        </li>-->
            
                        <li>
                            <a href="/blog">Blog</a>
                        </li>
            
                        <li>
                            <a href="/about">About</a>
                        </li>
            
                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                        <li>
                            <a href="/kitchen-garden">Kitchen Gardening</a>
                        </li>
                        <li>
                            <a href="/services">Services</a>
                        </li>
                    </ul>
                    
                    
                </nav>
                
            </div>
        </div>
    </div>
</nav>
