<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    @include('includes.alert')
    @yield('content')
    @include('includes.footer')
    @stack('page-script')
</body>
</html>