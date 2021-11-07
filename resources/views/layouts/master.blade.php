<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>Mylibrary | @yield('title', 'Home')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
    <div class="footer">
        Copyright 2021
    </div>
    @show
</body>
</html>