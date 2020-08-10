<header id="header" id="home">
    <!-- <div class="container header-top">
        <div class="row">
            <div class="col-6 top-head-left">				  			
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
            <div class="col-6 top-head-right">
                <ul>
                    <li><a href="tel:+880 012 3654 896"><span>+880 012 3654 896</span> <span class="lnr lnr-phone-handset"></span></a></li>
                    <li><a href="#">Register / Login</a></li>
                </ul>
            </div>			  			
        </div>
    </div> -->
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex topper">
            <div id="logo">
            <a href="{{route('index')}}"><img src="{{asset('img/sarabelogo_footer.png')}}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li class="menu-has-children"><a href="{{route('services.list')}}">Services</a>
                    <ul>
                        @foreach ($serves as $serve)
                            <li><a href="{{route('services.detail', $serve->slug)}}">{{$serve->service_name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{route('blog.index')}}">Blog</a></li>
                <li><a href="{{route('gallery.index')}}">Gallery</a></li>
                <li><a href="/contact">Contact</a></li>	
                </li>			          
            </ul>
            </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
</header><!-- #header -->