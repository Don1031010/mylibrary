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

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

</head>

<body class="w-full md:w-11/12 mx-auto">

    <div class="">
        @yield('content')
    </div>

    @section('footer')
        <div class="footer">

            @if(session()->has('success'))
                <div x-data="{ show: true }"
                    x-init="setTimeout(() => show = false, 4000)"
                    x-show="show"
                    class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
                    <p>{{ session('success') }}</p>
                    {{-- <p>{{ session()->get('success') }}</p> --}}
                </div>
            @endif

            <p>  Copyright 2021   </p>
        </div>
    @show

</body>
</html>