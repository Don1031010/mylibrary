<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="/app.css"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}

    <title>Mylibrary | @yield('title', 'Home')</title>
</head>
<body class="w-full md:w-11/12 mx-auto">
    <div class="">
        @yield('content')
    </div>
    @section('footer')
    <div class="footer">
        Copyright 2021
    </div>
    @show
</body>
</html>