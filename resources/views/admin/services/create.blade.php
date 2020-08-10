@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Add Service')

@section('name', 'Add New Service')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-1">
            <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="service_name">Service Name</label>
                <input type="text" name="service_name" class="form-control">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control">
                <label for="image">Upload Image</label> <br>
                <input type="file" name="image" class="file-btn"> <br>
                <label for="description">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection