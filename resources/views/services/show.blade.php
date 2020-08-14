@extends('layouts.deflayout')

@section('content')
    <section class="blog-posts-area section-gap">
        <div class="container toppers">
            <div class="row">
                <div class="col-lg-10 offset-1 post-list blog-post-list">
                    <div class="single-post">
                        <img class="img-fluid" src="{{asset('images/' . $service->image)}}" width= 1000 alt="">
                        <div class="service_name text-center"><h1>{{$service->service_name}}</h1></div>
                        <div class="content-wrap desc">
                            <p>{{$service->description}}</p>
                        </div>
                        @if ($service->service_name == 'SECURITY GUARD SERVICES')
                            <div>
                                <h3 class="team-header">Pricing</h3><br>
                                <div class="row">
                                    <p class="col-md-4">Grade 1 (Alpha)</p><p class="col-md-8">&#8358; 45,000 per unit</p>
                                    <p class="col-md-4">Grade 2 (Bravo)</p><p class="col-md-8">&#8358; 40,000 per unit</p>
                                    <p class="col-md-4">Grade 3 (Charlie)</p><p class="col-md-8">&#8358; 35,000 per unit</p>
                                    <p class="col-md-4">Supervisor</p><p class="col-md-8">&#8358; 60,000 per unit</p>
                                </div>
                            </div>
                        @endif
                        <a href="/contact" class="primary-btn text-uppercase offset-5 quote-btn">Request Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection