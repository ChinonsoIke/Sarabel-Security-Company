@extends('admin.layouts.adminlayout')

@section('title', 'Admin | Users')

@section('name', 'Users')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h1>Add New User</h1>
                    <hr>
                    <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        
                        <label for="title">Name:</label>
                        <input type="text" name="name" class="form-control">

                        <label for="title">Email:</label>
                        <input type="text" name="email" class="form-control">

                        <label for="title">Phone:</label>
                        <input type="text" name="phone" class="form-control">

                        <label for="title">Contact Address:</label>
                        <input type="text" name="address" class="form-control">

                        <label for="title">Password:</label>
                        <input type="password" name="password" class="form-control">

                        <label for="title">Confirm Password:</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        <p></p>
                        <input type="submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection