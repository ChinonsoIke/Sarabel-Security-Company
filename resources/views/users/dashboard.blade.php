@extends('layouts.deflayout')
@section('content')
<section>   
    <div class="container">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <a href="{{route('projects.create')}}" class="btn btn-primary">Add Project</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Projects</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead">
                                <tr>
                                    <th>S/N</th>
                                    <th>Project</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($user->projects as $project)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{$project->title}}</td>
                                    <td>{{$project->description}}</td>
                                    <td><a href="{{route('projects.edit', $project->id)}}" class="btn btn-small btn-success">Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-3 offset-md-1">
                <ul class="menu-has-children"><p>Activities</p>
                    <li><a href="{{route('projects.index')}}">Projects</a></li>
                    <li>New Message</li>
                    <li>Inbox Messages</li>
                    <li>Sent Messages</li>
                    <li>Files</li>
                </ul>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection