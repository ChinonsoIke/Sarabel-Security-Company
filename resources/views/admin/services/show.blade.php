@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Services')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-10">
                <img class="img-fluid" src="{{asset('images/' . $service->image)}}" alt="">
            </div>
            <div class="row">
                <div class="col-md-10">
                    <p>{{$service->description}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection