@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Files')

@section('name', 'Files')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Files</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="col-md-10">
                                    <tr>
                                        <th>User</th>
                                        <th>Project</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($files as $file)
                                    <tr>
                                        <th><a href="{{route('users.show', $file->project->user()->first()->id)}}">{{$file->project->user()->first()->name}}</a></th>
                                        <td><a href="{{route('backend.projects.show', $file->project()->first()->slug)}}">{{$file->project->title}}</a></td>
                                        <td>{{$file->title}}</td>
                                        <td>{{$file->description}}</td>
                                        <td>
                                            <a href="{{route('backend.files.download', $file->id)}}" class="btn-small btn-primary">Download</a>
                                            <form action="{{route('backend.files.destroy', $file->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Delete" class="btn-small btn-danger">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $files->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection