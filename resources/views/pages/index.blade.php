@extends('layouts.deflayout')

@push('page-script')
<script type="text/javascript" src="{{asset("js/theme-home.js")}}"></script>  
@endpush

@section('content')
    <!-- start banner Area -->
    {{--<section class="home-slidershow">
        <div class="slide-show">
            <div class="vt-slideshow">
                <ul>
                    <li class="slide1" data-transition="random" ><img src="{{asset("images/s4.jpg")}}" alt="" /></li>
                    <li class="slide1" data-transition="random" ><img src="{{asset("images/cctv1.jpg")}}" alt="" /></li>
                    <li class="slide2" data-transition="random" ><img src="{{asset("images/slide/convoy3.jpg")}}" alt="" /></li>
                    <li class="slide3" data-transition="random" ><img src="{{asset("images/slide/s9.jpg")}}" alt="" /></li>
                    <!-- <li class="slide3" data-transition="random" ><img src="{{asset("images/slide/banner6.png")}}" alt="" /></li>
                    <li class="slide3" data-transition="random" ><img src="{{asset("images/slide/banner7.png")}}" alt="" /></li>
                    <li class="slide3" data-transition="random" ><img src="{{asset("images/slide/banner8.png")}}" alt="" /></li>
                    <li class="slide3" data-transition="random" ><img src="{{asset("images/slide/banner9.png")}}" alt="" /></li> -->
                </ul> 
            </div>
        </div>
    </section>--}}

    <!--slider-->
    <section class="home-slidershow d-none d-sm-block">
        <div class="slide-show">
            <div id="sarabel-slide" class="carousel slide" data-ride= "carousel">
                <ul class="carousel-indicators">
                    <li data-target="#sarabel-slide" data-slide-to="0" class="active"></li>
                    <li data-target="#sarabel-slide" data-slide-to="1"></li>
                    <li data-target="#sarabel-slide" data-slide-to="2"></li>
                    <li data-target="#sarabel-slide" data-slide-to="3"></li>
                </ul>
                <div class="carousel-inner">
                    <div class= "carousel-item active">
                        <img src="{{asset("images/s12.png")}}" alt="Banner 1" width= "1100" height= "500">
                    </div>
                    <div class= "carousel-item">
                        <img src="{{asset("images/cctv3.png")}}" alt="Banner 2" width= "1100" height= "500">
                    </div>
                    <div class= "carousel-item">
                        <img src="{{asset("images/escort.png")}}" alt="Banner 3" width= "1100" height= "500">
                    </div>
                    <div class= "carousel-item">
                        <img src="{{asset("images/per-sec.png")}}" alt="Banner 4" width= "1100" height= "500">
                    </div>
                    <div class= "carousel-item">
                        <img src="{{asset("images/perimeter.png")}}" alt="Banner 3" width= "1100" height= "500">
                    </div>
                    <div class= "carousel-item">
                        <img src="{{asset("images/guard.png")}}" alt="Banner 3" width= "1100" height= "500">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev arrow" href="#sarabel-slide" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next arrow" href="#sarabel-slide" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>
    <!--/slider-->
    <!-- End banner Area -->

    <!-- Start about Area -->
    <section class="service-area service-page-service section-gap" id="service">
        <div class="container">					
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-service">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('images/s11.jpg')}}" alt="">
                        </div>
                        <div class="detail">
                            <h2 class="about-title">Who We Are</h2>
                            <hr>
                            <p>Sarabel Logistics and Security Services Ltd is a total security company. The company was formed to offer value and world class service as a result of the significant weakness and inadequacies of security and protection services in the country in terms of professionalism, quality, and customer satisfaction, competitive cost and effectiveness.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="single-service">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('images/s2.jpg')}}" alt="">
                        </div>
                        <div class="detail">
                            <h2 class="about-title">What We Do</h2>
                            <hr>
                            <p> We protect assets, human resources; promote confidence and business continuity helping businesses to remain focused on their core competencies. We offer extensive line of security and personal protection services.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-service">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('images/s4.jpg')}}" alt="">
                        </div>
                        <div class="detail">
                            <h2 class="about-title">Why Choose Us?</h2>
                            <hr>
                            <p>Sarabel Logistics and Security Services Ltd has the most skilled professionals within its ranks, who always go the extra mile to ensure its clients are fully satisfied and comfortable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </section>
    <!-- End about Area -->		

    <!-- Start service Area -->
    <section class="service-area section-gap" id="service">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Our Offered Services</h1>
                    </div>
                </div>
            </div>						
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4">
                        <div class="single-service">
                            <div class="thumb">
                                <img class="img-fluid" src="{{asset('images/' . $service->image)}}" alt="">
                            </div>
                            <div class="detail">
                                <a href="{{route('services.detail', $service->slug)}}"><h4>{{$service->service_name}}</h4></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row d-flex justify-content-center more">
                <a href="{{route('services.list')}}" class="primary-btn text-uppercase">View all services</a>
            </div>
        </div>	
    </section>
    <!-- End service Area -->

    <!-- Start feature Area -->
    <!-- <section class="feature-area section-gap" id="feature">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pb-40 header-text title">
                    <h1>Some Features that Make Us Unique</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <h4><span class="lnr lnr-user"></span>Needs Assessment</h4>
                        <p>We do proper assessment of needs</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <h4><span class="lnr lnr-license"></span>Professional Service</h4>
                        <p>We have the most skilled professionals within our ranks.</p>								
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <h4><span class="lnr lnr-phone"></span>Customer Satisfaction</h4>
                        <p>We go the extra mile to make sure our clients are satisfied with our work.</p>								
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>				
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>								
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                        </p>									
                    </div>
                </div>						 -->
            </div>
        </div>	
    </section> -->
    <!-- End feature Area -->				

    <!-- Start fact Area -->
    <section class="facts-area section-gap" id="facts-area">
        <div class="container">
            <div class="row">
                <div class="col single-fact">
                    <h1 class="counter">256</h1>
                    <h5 class="counter-text">Projects Completed</h5>
                </div>
                <div class="col single-fact">
                    <h1 class="counter">384</h1>
                    <h5 class="counter-text">Really Happy Clients</h5>
                </div>
                <div class="col single-fact">
                    <h1 class="counter">1059</h1>
                    <h5 class="counter-text">Total Tasks Completed</h5>
                </div>										
            </div>
        </div>	
    </section>
    <!-- end fact Area -->	

    <!-- Start partners Area -->
    <section class="galery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Partners and Agencies</h1>
                    </div>
                </div>
            </div>					
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 partners">
                    <img class="img-fluid partner-img" src="{{asset('images/npf.png')}}" alt="">
                </div>
                <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 partners">
                    <img class="img-fluid partner-img" src="{{asset('images/Maplesoft2.png')}}" alt="">
                </div>	
                <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 partners">
                    <img class="img-fluid partner-img" src="{{asset('images/ashaka.png')}}" alt="">
                </div>	
                <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 partners">
                    <img class="img-fluid partner-img" src="{{asset('images/starcom.png')}}" alt="">
                </div>	
                <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 partners">
                    <img class="img-fluid partner-img" src="{{asset('images/urbaco.gif')}}" alt="">
                </div>	
                <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 partners">
                    <img class="img-fluid partner-img" src="{{asset('images/verint.png')}}" alt="">
                </div>	
                <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 partners">
                    <img class="img-fluid partner-img" src="{{asset('images/centurion.jpg')}}" alt="">
                </div>	
                <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 partners">
                    <img class="img-fluid partner-img" src="{{asset('images/aventura.png')}}" alt="">
                </div>													
            </div>
        </div>	
    </section>
    <!-- End partners Area -->						

    <!-- Start gallery Area -->
    <!-- <section class="galery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Latest From Our Gallery</h1>
                    </div>
                </div>
            </div>					
            <div class="row">
                @foreach ($imgs as $img)
                    <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6">
                        <a href="" class="single-gallery">
                            <img class="img-fluid" src="{{asset('images/' . $img->picture)}}" alt="">
                        </a>
                    </div>
                @endforeach														
            </div>
            
            <div class="row d-flex justify-content-center more">
                <a href="{{route('gallery.index')}}" class="primary-btn text-uppercase">View gallery</a>
            </div>
        </div>	
    </section> -->
    <!-- End galery Area -->

    <!-- Start blog Area -->
    <!-- <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Latest From Our Blog</h1>
                    </div>
                </div>
            </div>					
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('images/' . $post->featured_image)}}" alt="">								
                        </div>
                        <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
                        <a href="blog-single.html"><h4>{{$post->title}}</h4></a>
                        <p>{{substr(strip_tags($post->body), 0, 300)}}{{strlen(strip_tags($post->body)) > 250 ? "[...]" : ""}}</p>								
                    </div>
                @endforeach				
            </div>
            
            <div class="row d-flex justify-content-center more">
                <a href="{{route('blog.index')}}" class="primary-btn text-uppercase">View blog</a>
            </div>
        </div>	
    </section> -->
    <!-- End blog Area -->
@endsection