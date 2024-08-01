<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ai lista</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-stone-400 via-stone-100 via-0% to-stone-500 justify-center items-center flex flex-col">
    <header class="w-full h-24 flex justify-evenly items-center bg-slate-600 text-white">
       <h1 class="text-5xl">Ai Tools</h1> 
   
        <nav>
            <ul class="flex gap-5">
                <li>
                    <a href="{{route('aitools.index')}}">Ai Toolok</a>
                </li>
                <li>
                    <a href="{{route('categories.index')}}">Kategóriák</a>
                </li>
                <li>
                    <a href="{{route('categories.create')}}">Kategória létrehozás</a>
                </li>
            </ul>
        </nav>
    
    </header>
    <main class="flex flex-col bg-zinc-600 mt-16 text-white p-16 rounded-lg justify-start items-center w-[80dvw] h-[80dvh]">
        @yield('content')
    </main>
    <footer>Minden jog fentartva: blackboxdevs.hu</footer>
</body>
</html>