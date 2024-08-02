@extends('layout')
@section('content')

    <h1>Új kategória</h1>

    @error('name')
        <div>{{ $message }}</div>
    @enderror

    <form class="flex gap-5" action="{{ route('categories.store') }}" method="POST">
        @csrf
        <input class="text-black" type="text" name="name" placeholder="Kategória neve">
        <button class="bg-slate-700 text-white rounded-md p-2" type="submit">Mentés</button>
    </form>

@endsection
