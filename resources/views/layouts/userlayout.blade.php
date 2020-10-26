<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    @include('includes.alert')
    <div class="row">
        <div class="col-md-8 col-sm-12">
            @yield('content')
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
    </div>
    @include('includes.footer')
    @stack('page-script')
</body>
</html>