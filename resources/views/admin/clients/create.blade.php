@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Clients')

@section('name', 'Add Client')

@section('content')
    <div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <label for="name">Client Name:</label>
                            <input type="text" name="name" class="form-control">
                            
                            <label name="logo">Upload Image:</label><br>
                            <input type="file" name="logo" class="file-btn form-control"><hr>

                            <input type="submit" class="btn btn-lg btn-success btn-block">
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection