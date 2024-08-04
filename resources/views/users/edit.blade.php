@extends('layout')
@section('content')
@if ($errors->any())
    <div class="bg-red-500 p-4 rounded-md mb-6 text-white">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1 class="text-3xl text-black pb-6">Felhasználói adatok szerkesztése</h1>

<div class="flex gap-20">

<form action="{{route('users.update', $user->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h2>Alap adatok</h2>
    <div class="flex text-black mt-5 flex-col gap-3">
        <label for="name">Név</label>
        <input class="p-2 rounded-md" value="{{$user->name}}" type="text" name="name" id="name">
        <label for="email">Email</label>
        <input class="p-2 rounded-md" value="{{$user->email}}" type="email" name="email" id="email">
        <button class="bg-slate-800 p-3 text-white rounded-md" type="submit">Szerkesztés</button>
    </div>
</form>

<form action="{{route('users.update', $user->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h2>Jelszó módosítás</h2>
    <div class="flex text-black mt-5 flex-col gap-3">
        <label for="old_password">Régi jelszó</label>
        <input class="p-2 rounded-md" type="password" name="old_password" id="old_password">
        <label for="password">Jelszó</label>
        <input class="p-2 rounded-md" type="password" name="password" id="password">
        <label for="password_confirmation">Jelszó megerősítése</label>
        <input class="p-2 rounded-md" type="password" name="password_confirmation" id="password_confirmation">
        <button class="bg-slate-800 p-3 text-white rounded-md" type="submit">Módosítás</button>
    </div>
</form>
</div>
@endsection