@extends('layouts.deflayout')

@section('content')
    <section>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12 title">
                    <h1>
                        Photo Gallery				
                    </h1>
                </div>											
            </div>
        </div>
    </section>
    <!-- Start gallery Area -->
    <section class="galery-area section-gap" id="gallery">
        <div class="container">				
            <div class="row">
                @foreach ($imgs as $img)
                    <div class="col-lg-4 col-md-4">
                        <a href="" class="single-gallery">
                            <img class="img-fluid" src="{{asset('images/' . $img->picture)}}" alt="">
                        </a>
                    </div>
                @endforeach														
            </div>
        </div>	
    </section>
    <!-- End galery Area -->
@endsection