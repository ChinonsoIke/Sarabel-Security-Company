@extends('layouts.deflayout')
@section('content')
<section>   
    <div class="container">
        <br>
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
                                    <th>Project</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($user->projects as $project)
                                <tr>
                                    <td>{{$project->title}}</td>
                                    <td>{{$project->description}}</td>
                                    <td>
                                        <a href="{{route('projects.show', $project->slug)}}" class="btn-small btn-primary">View</a> 
                                        <a href="{{route('projects.edit', $project->id)}}" class="btn-small btn-success">Edit</a>
                                        <form action="{{route('projects.destroy', $project->id)}}" method="POST">
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

            <div class="dropdown col-md-3 offset-md-1">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                    Activities <span class="caret"></span>
                </button>
                
                <ul class="dropdown-menu">
                    <li><a href="{{route('users.dashboard')}}">My Projects</a></li><hr>
                    <li><a href="{{route('projects.create')}}">New Project</a></li><hr>
                    <li>New Message</li><hr>
                    <li>Inbox Messages</li><hr>
                    <li>Sent Messages</li>
                </ul>
            </div>
        </div><br>
    </div><!-- /.container-fluid -->
</section>
@endsection