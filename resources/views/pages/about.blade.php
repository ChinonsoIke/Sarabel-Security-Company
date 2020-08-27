@extends('layouts.deflayout')

@section('content')
    <!-- start banner Area -->
    <section>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12 title">
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
                    <img class="img-fluid" src="{{asset('images/s4.jpg')}}" alt="">
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
                    <div class="title text-center"><h1 class="mb-10">Our Team</h1></div>
                </div>
                <div class="content">
                    <h2 class="team-header">KELECHI OBIAKWATA</h2>
                    <h3 class="team-header">Managing Director</h3><br>
                    <p>Economist and Banker by profession and served many years in the bank before resigning to join Travelex Global and Financial Services (Formerly known as Thomas Cook). He rose from the position of Assistant Manager Credit to the position of Deputy General Manager. He served in various departments of the Organization before taking up the position of Security and Compliance for the lobal Company, a position he held before resigning to establish has own private business. Mr. Obiakwata holds a Bachelor of Science degree in Economics from Lagos State University and Master of Science degree in Finance and Banking from University of Benin. He is also an Associate Member of Chartered Institute of Bankers of Nigeria. Today he is a Certified Security Management Professional (CSMP) a certification from The International Security Management Institute, United Kingdom. He has attended several training programs both locally and internationally for his professional development. In Travelex he attended international training in Security and Compliance and Value Escort. He also attended security trainings conducted by Amor group and Corporate Risk Group (CRG), the company that trained him before he started his assignment in security management. His association with these international security giants sparked his interest and passion in the security profession which today has become his major business interest.
Under his SLSSL has come to be, spring from Sarabel Limited with various business interests, ranging from property, haulage, IT, Telecom Services, Agro supplies and farming.</p>
                </div>
                <div class="content">
                    <h2 class="team-header">ADUKE NWANYIEZE OBIAKWATA</h2>
                    <h3 class="team-header">Director</h3><br>
                    <p>Studied economics at Babcock University. She has combined passion with professionalism to uplift the company’s Administration and Personnel functions to a high standard. She served as an Administrative staff in LM Ericson Nigeria Limited and also as a personal assistant to the Key Account Officer in-charge of Zain Account and others. She has attended various courses and training to beef up her experiences.</p>
                </div>
                <div class="content">
                    <h2 class="team-header">MAJOR JOSEPH AKO FOLOUNSO Rtd.</h2>
                    <h3 class="team-header">Director</h3><br>
                    <p>Voluntarily retired from the services of Nigerian Army after 34 years of meritorious service. He was a dedicated soldier with many garlands. He joined Babcock University immediately he left the Nigerian Army as the Chief Security Officer. He brings his wealth of professional experience to Sarabel Logistics and Security Services Limited as a member of the board</p>
                </div>
                <div class="content">
                    <h2 class="team-header">MR. R.E EHIOROBOH</h2>
                    <h3 class="team-header">Consultant, Operations & Security Services</h3><br>
                    <p>is the head of Operations of Security in SARABEL Logistics and Security Services Limited in-charge of Security and Logistics. He is married with children and belongs to the group of competent and reliable security managers in the security profession in Nigeria. His academic background was a migration from a Diploma in Agriculture to a Masters degree in Criminology plus other professional trainings and self development programs. Mr. Ehiorobo is a security and management consultant and has worked in several security and management outfits. He was the managing director of KK-7 Security and Safety Limited. Before then, he had been a general manager, director of operations and chief security officer in various security organizations. He belongs to various professional bodies in Nigeria and overseas. He is a member of Institute of Industrial Security of Nigeria (IISSN), Nigeria Institute of Safety Professional (NISP), and Fire Protection Association of Nigeria (FPAN), Safety Organization of Philippines (SOP), World Safety Organization (WSO) and several others. Mr. Ehiorobo is also an Accredited Management Trainer in Nigeria and has worked as a management consultant with Adven Consulting Limited, Phenomenology and Ehiosan and Associates. He is also an associate consultant with Nigerian Institute of management (NIM), Nigerian Institute of Man Power Development and Industrial Relations (NIMDIR) and Centre for Management Development (CMD)</p>
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