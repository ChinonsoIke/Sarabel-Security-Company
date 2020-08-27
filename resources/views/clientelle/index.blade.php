@extends('layouts.deflayout')

@section('content')
    <section>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12 title">
                    <h1>
                        Our Porfolio				
                    </h1>
                </div>											
            </div>
        </div>
    </section>
    <!-- Start gallery Area -->
    <section class="galery-area section-gap" id="gallery">
        <div class="container">
            <div class="col-md-10 offset-1">			
                <div class="row">
                    @foreach ($clients as $client)
                        <div class="col-lg-3 col-md-3">
                            <a href="" class="single-gallery">
                                <img class="img-fluid" src="{{asset('images/clients' . $client->logo)}}" alt="">
                            </a>
                        </div>
                    @endforeach														
                </div>
            </div>
        </div>	
    </section>
    <!-- End galery Area -->
@endsection