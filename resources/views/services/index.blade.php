@extends('layouts.deflayout')

@section('content')
    <section>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12 title">
                    <h1>
                        Our Offered Services				
                    </h1>
                </div>											
            </div>
        </div>
    </section>

    <!-- Start service Area -->
    <section class="service-area service-page-service section-gap" id="service">
        <div class="container">					
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4">
                        <div class="single-service">
                            <div class="thumb">
                                <img class="img-fluid" src="{{asset('images/' . $service->image)}}" alt="">
                            </div>
                            <div class="detail">
                                <a href="{{route('services.detail', $service->slug)}}"><h4>{{$service->service_name}}</h4></a>
                                <p>{{substr(strip_tags($service->description), 0, 50)}}{{strlen(strip_tags($service->description)) > 50 ? '...' : '' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach																
            </div>
        </div>	
    </section>
    <!-- End service Area -->	
@endsection