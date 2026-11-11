<!-- resources/views/layouts/app.blade.php -->
<html>

<head>
    <title>App Name - @yield('title')</title>
</head>

<body>
    <!-- Simple Navigation Bar -->
    <nav style="background: #f3f4f6; padding: 10px; margin-bottom: 20px;">
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/about') }}">About</a> |
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>

    @section('sidebar')
    This is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
