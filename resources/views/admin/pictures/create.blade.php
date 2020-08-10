@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Add To Gallery')

@section('name', 'Add to Gallery')

@section('content')
    <div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form action="{{route('pictures.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <label name="picture">Upload Image:</label><br>
                            <input type="file" name="picture" class="file-btn form-control"><hr>

                            <input type="submit" class="btn btn-lg btn-success btn-block">
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection