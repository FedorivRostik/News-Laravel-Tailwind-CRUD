<!doctype html>
<html class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-blue-600 to-yellow-400">
<div class="max-w-screen-xl mx-auto h-screen grid grid-rows-[auto-1fr-auto]">
    <header class="px-2 border-b h-14 flex items-center justify-between">
        <a href="{{route('home')}}" class="uppercase font-bold text-2xl text-white hover:text-amber-300">Uanews</a>
        <nav class="flex space-x-5">
            <ul class="text-white flex space-x-1">
                <li><a href="{{route('home')}}" class="header-link">Home</a></li>
                <li><a href="{{route('posts.index')}}" class="header-link">Posts</a></li>
            </ul>

        </nav>
    </header>
    <div class="w-full">
        <main class="flex w-full flex-col m-2">

            @yield('content')
        </main>
    </div>

    <footer class="flex justify-end px-2 border-t">
        <p class="p-4 text-xs text-white font-semibold">
           @ 2023-{{now()->year }} <a class="text-blue-600 font-bold  hover:underline" href="https://t.me/ljutyk">Rostyslav Fedoriv</a>
            All rights reserved
        </p>
    </footer>
</div>
</body>
</html>
