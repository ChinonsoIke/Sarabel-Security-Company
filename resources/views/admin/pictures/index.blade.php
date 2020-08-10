@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Gallery')

@section('name', 'Gallery')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2 create">
                    <a href="{{route('pictures.create')}}" class="btn btn-primary">Add Picture</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pictures</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="col-md-10">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Picture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($pictures as $picture)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td><img class="img-fluid" src="{{asset('images/' . $picture->picture)}}" width=300 height=300 alt=""></td>
                                        <td><a href="" class="btn btn-small btn-success">Edit</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <hr>
                            
                            <div class="offset-5">
                                {{ $pictures->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection