@extends('layout')
@section('content')
    <h1 class="text-4xl font-bold mb-10">Felhasználók</h1>
    <div class="flex text-black flex-col gap-3">
        @if ($errors->any())
            <div class="bg-red-500 text-white p-3 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="flex text-black flex-col gap-3">
            <label for="name">Név</label>
            <input class="p-2 rounded-md" type="text" name="name" id="name">
            <label for="email">Email</label>
            <input class="p-2 rounded-md" type="email" name="email" id="email">
            <label for="password">Jelszó</label>
            <input class="p-2 rounded-md" type="password" name="password" id="password">
            <label for="password_confirmation">Jelszó megerősítése</label>
            <input class="p-2 rounded-md" type="password" name="password_confirmation" id="password_confirmation">
            <button class="bg-slate-800 p-3 text-white rounded-md" type="submit">Regisztráció</button>
        </div>
    </form>
    <a class="bg-slate-800 p-3 mt-5 rounded-md" href="{{ route('aitools.index') }}">Visszalépés</a>
@endsection