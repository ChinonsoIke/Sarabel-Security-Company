<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
        <img src="{{asset('img/sarabelogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <h3 class="brand-text font-weight-light">Sarabel Security</h3>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">

            <a href="index3.html" class="brand-link">
                <img src="{{asset('img/sarabelogo_footer.png')}}" alt="AdminLTE Logo">
            </a><br>

            <a href="{{route('backend')}}" class="{{ Request::is('backend') ? 'nav-link active' :  'nav-link' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <a href="{{route('services.index')}}" class="{{ Request::is('backend/services', 'backend/services/create') ? 'nav-link active' :  'nav-link' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Services
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <a href="{{route('posts.index')}}" class="{{ Request::is('backend/posts', 'backend/posts/create') ? 'nav-link active' :  'nav-link' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Posts
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <a href="{{route('tasks.index')}}" class="{{ Request::is('backend/tasks', 'backend/tasks/create') ? 'nav-link active' :  'nav-link' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Tasks
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <a href="{{route('pictures.index')}}" class="{{ Request::is('backend/pictures', 'backend/pictures/create') ? 'nav-link active' :  'nav-link' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <a href="{{route('clients.index')}}" class="{{ Request::is('backend/clients', 'backend/clients/create') ? 'nav-link active' :  'nav-link' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Clients
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>