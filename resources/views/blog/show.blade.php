@extends('layouts.deflayout')

@section('content')
    <!-- Start blog-posts Area -->
    <section class="blog-posts-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 post-list blog-post-list">
                    <div class="single-post">
                        <img class="img-fluid" src="{{asset('images/' . $post->featured_image)}}" alt="">
                        <a href="#">
                            <h1>{{$post->title}}</h1>
                        </a>
                        <div class="content-wrap">
                            <p>{{$post->body}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </section>
    <!-- End blog-posts Area -->
@endsection