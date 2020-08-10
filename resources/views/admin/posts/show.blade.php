@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Posts')

@section('name', 'Posts')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <h1>{{$post->title}}</h1>

                        <p class="lead">{!!$post->body!!}</p>
                    </div>                  

                    {{--<div class="col-md-4">
                        <div class="well">
                            <dl class="dl-horizontal">
                                <dt>Slug URL:</dt>
                                <dd>{{$post->slug}}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Category:</dt>
                                <dd>{{$post->category->name}}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Created At:</dt>
                                <dd>{{date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Last Updated:</dt>
                                <dd>{{date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
                            </dl>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary btn-block">Edit</a>
                                </div>
                                <div class="col-sm-6">
                                    {!! Form::open(['route'=> ['admin.posts.destroy', $post->id], 'method'=>'POST']) !!}

                                    @method('delete')

                                    {!! Form::submit('Delete', ['class'=> 'btn btn-danger btn-block']) !!}

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection