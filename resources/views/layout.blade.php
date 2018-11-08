<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Johan se website')</title>
</head>
<body>
<ul>
    <li><a href="/">Welcome</a></li>
    <li><a href="/contact">Contact</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/projects">Projects</a></li>
</ul>
    @yield('content')
</body>
</html>
