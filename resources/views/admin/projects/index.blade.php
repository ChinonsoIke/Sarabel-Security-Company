@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Projects')

@section('name', 'Projects')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="col-md-10">
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{$project->title}}</td>
                                        <td>{{substr(strip_tags($project->description), 0, 300)}}{{strlen(strip_tags($project->description)) > 300 ? '...' : '' }}</td>
                                        <td>{{date('M j, Y', strtotime($project->created_at))}}</td>
                                        <td></td>
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
                            <div class="text-center">
                                {{ $projects->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection