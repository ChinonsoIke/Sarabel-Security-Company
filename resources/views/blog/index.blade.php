@extends('layouts.deflayout')

@section('content')
    <section>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12 title">
                    <h1>
                        Blog				
                    </h1>
                </div>											
            </div>
        </div>
    </section>
    <!-- Start blog-posts Area -->
    <section class="blog-posts-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 post-list blog-post-list">
                    @foreach($posts as $post)
                        <div class="single-post">
                            <img class="img-fluid" src="{{asset('images/' . $post->featured_image)}}" alt="">
                            <a href="{{route('blog.show', $post->slug)}}" class="title">
                                <h1>{{$post->title}}</h1>
                            </a>
                            <p>{{substr(strip_tags($post->body), 0, 300)}}{{strlen(strip_tags($post->body)) > 250 ? "[...]" : ""}}</p>
                            <small>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</small>
                        </div>
                    @endforeach																			
                </div>
            </div>
        </div>	
    </section>
    <!-- End blog-posts Area -->
@endsection