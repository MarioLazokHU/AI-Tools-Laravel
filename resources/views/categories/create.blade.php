@extends('layout')
@section('content')

    <h1>Új kategória</h1>

    @error('name')
        <div>{{ $message }}</div>
    @enderror

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Kategória neve">
        <button class="bg-slate-700 text-white rounded-md p-2" type="submit">Mentés</button>
    </form>

@endsection
