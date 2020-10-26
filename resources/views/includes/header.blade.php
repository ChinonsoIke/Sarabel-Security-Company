<header id="header" id="home">
    <div class="container-fluid header-top d-none d-sm-block">
        <div class="row col-md-12">
            <div class="col-12 col-md-6 top-head-left">				  			
                <ul>
                    <li><p>•   SUPPORT <strong>234 803 500 2003</strong></p></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 top-head-right">
                <ul>
                    @guest
                        <li><a href="/login" class="btn btn-primary">Login</a></li>
                        @if (Route::has('register'))
                            <li><a href="/register" class="btn btn-secondary">Register</a></li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link hello dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Hello, {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('users.dashboard') }}">Dashboard</a><br>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>			  			
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex topper">
            <div id="logo">
            <a href="{{route('index')}}"><img src="{{asset('img/sarabelogo.png')}}" alt="" title="" /></a>
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
                <li><a href="{{route('clientelle.index')}}">Portfolio</a></li>
                <li><a href="/contact">Contact</a></li>	
                <li><a href="/register" class="d-block d-sm-none">Register</a></li>
                <li><a href="/login" class="d-block d-sm-none">Login</a></li>		          
            </ul>
            </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
</header><!-- #header -->