@extends('layout')
@section('content')
    <h1 class="text-4xl font-bold mb-10">Kategóriák</h1>
    <a class="bg-slate-800 p-3 mb-10 rounded-md" href="{{ route('categories.create') }}">Létrehozás</a>
    @if (session('success'))
        <div class="bg-orange-200 text-black p-5 rounded-lg shadow-lg">
            {{ session('success') }}
        </div>
    @endif
    <div class="text-white">
        <ul class="w-full h-full">
            @foreach ($categories as $category)
                <div class="grid grid-cols-4 mb-3 w-full gap-3 items-center">
                    <li class="text-2xl font-bold">{{ $category->name }}</li>
                    <a class="bg-slate-800 p-3 rounded-md"
                        href="{{ route('categories.show', $category->id) }}">Megjelenítés</a>
                    <a class="bg-slate-800 p-3 rounded-md"
                        href="{{ route('categories.edit', $category->id) }}">Szerkesztés</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-950 p-3 rounded-md" type="submit"
                            onclick="return confirm('Törölni szeretnéd?')">Törlés</button>
                    </form>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
