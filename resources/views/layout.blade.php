<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <ul class="nav">
        @if (request()->routeIs('home'))
        <li><a class="active" href="{{ route('home') }}">Home</a></li>
        @else
        <li><a href="{{ route("home") }}">Home</a></li>
        @endif
        @if (request()->routeIs('about'))      
        <li><a class="active" href="{{ route("about") }}">About</a></li>
        @else
        <li><a href="{{ route("about") }}">About</a></li>
        @endif
    </ul>
    <div class="main">
    @yield('content')
    </div>
    
</body>
</html>