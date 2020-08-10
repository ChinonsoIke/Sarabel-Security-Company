@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Create New Post')

@section('name', 'Create New Post')

@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <label for="title">Title:</label>
                            <input type="text" name="title" class="form-control">

                            <label for="slug">Slug:</label>
                            <input type="text" name="slug" class="form-control">

                            <label name="featured_image">Upload Featured Image:</label><br>
                            <input type="file" name="featured_image" class="file-btn">

                            <hr>
                            <label for="body">Body:</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                            <p></p>
                            <input type="submit" class="btn btn-lg btn-success btn-block">
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection