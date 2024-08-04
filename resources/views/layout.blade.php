<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ai Tools</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/js/app.js')
</head>

<body
    class="bg-gradient-to-r from-stone-400 via-stone-100 via-0% to-stone-500 justify-center items-center flex flex-col">
    <header class="w-full h-24 flex justify-around items-center bg-slate-600 text-white">
    <a href="{{route('aitools.index')}}" class="flex gap-5 items-center">
        <img class="w-32 drop-shadow-lg" src="{{ asset('logo.png') }}" alt="">
        <h1 class="text-5xl font-bold">AI Tools</h1>
    </a>

        <nav>
            <ul class="flex gap-5">
                <li>
                    <a href="{{ route('aitools.index') }}">Ai Toolok</a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}">Kategóriák</a>
                </li>
                <li>
                    <a href="{{ route('blogposts.index') }}">Blog</a>
                </li>
            </ul>
        </nav>

    </header>
    <main
        class="flex flex-col bg-zinc-600/50 mt-16 text-white p-16 rounded-lg justify-start items-center w-[80dvw] h-[80dvh]">
        @yield('content')
    </main>
    <footer class="mt-10 p-3 text-center bg-slate-300/20 w-full h-10 bottom-0 absolute">Minden jog fentartva: blackboxdevs.hu</footer>
</body>
<style>
    textarea {
        resize: none;
    }
</style>

</html>
