<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- bellow css link is for Tailwind CSS --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

        <title>Mylibrary | @yield('title', 'Home')</title>
    </head>

    <body class="max-w-2xl mx-auto sm:max-w-5xl">

        <div class="mx-auto border-4 border-gray-300  rounded-3xl overflow-hidden">
        {{-- <div class="mx-auto border-4 border-gray-300 p-2 rounded-3xl"> --}}
            @include('partials.header')
            
            <div class="px-4 md:px-16 py-4">
                @include('partials.banner')
                @yield('content')

            </div>

            @include('partials.footer')

        </div>



    </body>
</html>