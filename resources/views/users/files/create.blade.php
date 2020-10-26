@extends('layouts.deflayout')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-md-1">
                        <h1>Add New File</h1>
                        <hr>
                        <form action="{{route('files.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <label for="title">Title:</label>
                            <input type="text" name="title" class="form-control"><br>

                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description:"></textarea><br>
                            <input type="file" name="file" class="file-btn form-control">
                            <input type="hidden" name="project_id" value="{{$project_id}}">
                            <p></p>
                            <input type="submit" value="Upload" class="btn btn-lg btn-success btn-block">
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection