@extends('layouts.deflayout')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>Create New Project</h1>
                        <hr>
                        <form action="{{route('projects.store')}}" method="POST">
                            @csrf
                            
                            <label for="title">Title:</label>
                            <input type="text" name="title" class="form-control">

                            <label for="slug">Slug:</label>
                            <input type="text" name="slug" class="form-control">

                            <hr>

                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description:"></textarea>
                            <p></p>
                            <input type="submit" class="btn btn-lg btn-success btn-block">
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection