@extends('admin.layouts.adminlayout')
@section('title', 'Admin | Projects')

@section('name', 'Projects')

@section('content')
<section>  
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$project->title}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Title</th>
                                <td>{{$project->title}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$project->description}}</td>
                            </tr>
                            <tr>
                                <th>Created by User</th>
                                <td><a href="{{route('users.show', $project->user()->first()->id)}}">{{$project->user()->first()->name}}</a></td>
                            </tr>
                            <tr>
                                <th>Start Date</th>
                                <td>{{date('M j, Y', strtotime($project->created_at))}}</td>
                            </tr>
                            <tr>
                                <th>End Date</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th><a href="{{route('backend.projects.edit', $project->id)}}" class="btn btn-small btn-success">Edit Project</a></th>
                                <td>
                                    <form action="{{route('backend.projects.destroy', $project->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete Project" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th><a href="{{route('tasks.create', $project->id)}}" class="btn btn-small btn-primary">Create a task for this project</a></th>
                                <td><a href="{{route('backend.files.create', $project->id)}}" class="btn btn-small btn-primary">Upload file for this project</a></td>
                            </tr>
                        </table>
                    </div>
                </div><br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Associated Tasks</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($project->tasks as $task)
                                <tr>
                                    <td>{{$task->title}}</td>
                                    <td>{{$task->description}}</td>
                                    <td>{{$task->status}}</td>
                                    <td>
                                    <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn-small btn-danger">
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Associated Files</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Download File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($project->files as $file)
                                <tr>
                                    <td>{{$file->title}}</td>
                                    <td><a href="{{route('files.download', $file->id)}}" class="btn-small btn-primary">Download</a></td>
                                    <td>
                                    <form action="{{route('files.destroy', $file->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn-small btn-danger">
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section><br>
@endsection