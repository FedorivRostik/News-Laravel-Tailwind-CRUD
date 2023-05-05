<!doctype html>
<html class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-400">
<div class="max-w-screen-xl mx-auto h-screen grid grid-rows-[auto-1fr-auto]">
    <header class="px-2 border-b h-14 flex items-center justify-between">
            <a href="" class="uppercase font-bold text-2xl text-white hover:text-amber-300">Uanews</a>
            <nav class="flex space-x-5">
                <ul class="text-white flex space-x-1">
                    <li><a href="" class="header-link">Home</a></li>
                    <li><a href="" class="header-link">Posts</a></li>
                </ul>

            </nav>
    </header>
    <div>
        <main class="flex w-full flex-col m-2">
@yield('content')
        </main>
    </div>

    <footer class="px-2 border-t">
        <div class="">
            <div>
                <h6>
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </h6>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
