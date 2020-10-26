@extends('admin.layouts.adminlayout')
@section('title', 'Admin | User')

@section('name', 'User')

@section('content')
<section>  
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Name</th>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$user->phone ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Contact Address</th>
                                <td>{{$user->address}}</td>
                            </tr>
                            <tr>
                                <th>Registered</th>
                                <td>{{date('M j, Y', strtotime($user->created_at))}}</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete User" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div><br>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Related Projects</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Created</th>
                                    <th>Modified</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user->projects as $project)
                                <tr>
                                    <td>{{$project->title}}</td>
                                    <td>{{$project->description}}</td>
                                    <td>{{$project->start_date}}</td>
                                    <td>{{$project->end_date}}</td>
                                    <td>{{date('M j, Y', strtotime($project->created_at))}}</td>
                                    <td>{{date('M j, Y', strtotime($project->updated_at))}}</td>
                                    <td>
                                        <a href="{{route('backend.projects.show', $project->slug)}}" class="btn-small btn-success">View</a>
                                        <form action="{{route('backend.projects.destroy', $project->id)}}" method="POST">
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