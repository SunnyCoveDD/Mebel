<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/app.css">
    <script src="resources/js/app.js"></script>
    <title>@yield('title', 'Главная страница')</title>
</head>
<body class="d-flex flex-column min-vh-100">
@include('components.header')
<div class="wrapper flex-grow-1 w-100">
    @yield('content')
</div>
@include('components.footer')
</body>
</html>
