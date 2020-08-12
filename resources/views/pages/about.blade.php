@extends('layouts.deflayout')

@section('content')
    <!-- start banner Area -->
    <section>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1>
                        About Us				
                    </h1>
                </div>											
            </div>
        </div>
    </section>
    <!-- End banner Area -->	

    <!-- Start about-top Area -->
    <section class="about-top-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 about-top-left">
                    <p>Sarabel Logistics and Security Services Limited (SLSSL) is a total security company offering an extensive line of physical, electronic and personal security protection services. The firm consists of three principal owners with a combined industry experience of over 35 years. The company was formed to offer value and world class service as a result of the significant weakness and inadequacies of security and protection services in the country in terms of professionalism, quality, and customer satisfaction and effectiveness.
                    SLSSL is an integrated provider of security products and services: physical and personal security and procurement of security equipment and Kits for private and public sector clients.
                    SLSSL promote complete range of managed surveillance services, including: remote monitoring of your CCTV and access control, building management systems, security help desk with full control room functionality. SLSSL as a professional and security service provider, focus on the identification, assessment and mitigation of risk relating to human safety and business continuity solutions tailored towards saving time, saving cost and improving profits
                    </p>
                </div>
                <div class="col-lg-6 about-top-right">
                    <img class="img-fluid" src="{{asset('images/guarding2.png')}}" alt="">
                </div>
            </div>
        </div>	
    </section>
    <!-- End about-top Area -->		

    <!-- Start team Area -->
    <section class="team-area section-gap" id="team">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Experienced Team</h1></div>
                </div>
            </div>						
            <!-- <div class="row justify-content-center d-flex align-items-center">
                <div class="col-md-3 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/t1.jpg" alt="">
                    </div>
                    <div class="meta-text mt-30 text-center">
                        <h4>Ethel Davis</h4>
                        <p>Managing Director (Sales)</p>									    	
                    </div>
                </div>
                <div class="col-md-3 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/t2.jpg" alt="">
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="meta-text mt-30 text-center">
                        <h4>Rodney Cooper</h4>
                        <p>Creative Art Director (Project)</p>			    	
                    </div>
                </div>	
                <div class="col-md-3 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/t3.jpg" alt="">
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="meta-text mt-30 text-center">
                        <h4>Dora Walker</h4>
                        <p>Senior Core Developer</p>			    	
                    </div>
                </div>	
                <div class="col-md-3 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/t4.jpg" alt="">
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="meta-text mt-30 text-center">
                        <h4>Lena Keller</h4>
                        <p>Creative Content Developer</p>			    	
                    </div>
                </div>																								
            </div> -->
        </div>	
    </section>
    <!-- End team Area -->
@endsection