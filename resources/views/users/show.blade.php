@extends('layout')
@section('content')
    @if (session('success'))
        <div class="bg-green-500 p-4 rounded-md mb-6 text-white">
            {{ session('success') }}
        </div>
    @endif

    <h1>Fiókom</h1>
    <div class="flex flex-col gap-3">
        <p>Név: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <a class="bg-slate-800 p-3 text-white rounded-md" href="{{ route('users.edit', $user->id) }}">Szerkesztés</a>
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 p-3 text-white rounded-md" type="submit">
                Törlés
            </button>
        </form>

        <form action="{{ route('users.logout', $user->id) }}" method="POST">
            @csrf
            @method('POST')
            <button class="bg-gray-600 p-3 text-white rounded-md" type="submit">
                Kijelentkezés
            </button>
        </form>
    </div>
@endsection
