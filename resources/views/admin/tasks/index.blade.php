@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Tasks')

@section('name', 'Tasks')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10"></div>
                {{--<div class="col-md-2 create">
                    <a href="{{route('tasks.create')}}" class="btn btn-primary">Add New Task</a>
                </div>--}}
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tasks</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="col-md-10">
                                    <tr>
                                        <th>Project</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Started</th>
                                        <th>Status</th>
                                        <th>Completed</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($tasks as $task)
                                    <tr>
                                        <th>{{$task->project->title}}</th>
                                        <td>{{$task->title}}</td>
                                        <td>{{$task->description}}</td>
                                        <td>{{date('M j, Y', strtotime($task->created_at))}}</td>
                                        <td>{{$task->status}}</td>
                                        <td></td>
                                        <td>
                                            <a href="" class="btn-small btn-success">Edit</a>
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
                            <div class="text-center">
                                {{ $tasks->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection