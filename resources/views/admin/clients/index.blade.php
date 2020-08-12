@extends('admin.layouts.adminlayout')

@section('title', 'Clients')

@section('name', 'Clients')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2 create">
                    <a href="{{route('clients.create')}}" class="btn btn-primary">Add Client</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Clients</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="col-md-10">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Client Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{$client->name}}</td>
                                        <td><a href="" class="btn btn-small btn-success">Edit</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <hr>
                            
                            <div class="offset-5">
                                {{ $clients->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection