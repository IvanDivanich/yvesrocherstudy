<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('icons/logo.png') }}" type="image/png?">
    <title>@yield('title')</title>
    @yield('styles')
</head>
<body>
    @yield('content')
    @yield('script')
</body>
</html>