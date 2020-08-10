@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Posts')

@section('name', 'Posts')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2 create">
                    <a href="{{route('tasks.create')}}" class="btn btn-primary">Add New Post</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Posts</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="col-md-10">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>Published</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{$post->title}}</td>
                                        <td>{{substr(strip_tags($post->body), 0, 50)}}{{strlen(strip_tags($post->body)) > 50 ? '...' : '' }}</td>
                                        <td>{{date('M j, Y', strtotime($post->created_at))}}</td>
                                        <td><a href="" class="btn btn-small btn-success">Edit</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection