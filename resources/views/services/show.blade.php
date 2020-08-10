@extends('layouts.deflayout')

@section('content')
    <section class="blog-posts-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-1 post-list blog-post-list">
                    <div class="single-post">
                        <img class="img-fluid" src="{{asset('images/' . $service->image)}}" width= 1000 alt="">
                        <div class="service_name text-center"><h1>{{$service->service_name}}</h1></div>
                        <div class="content-wrap desc">
                            <p>{{$service->description}}</p>
                        </div>
                        <a href="#" class="primary-btn text-uppercase offset-5">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection