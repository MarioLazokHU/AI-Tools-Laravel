@extends('layout')
@section('content')
    @error('name')
        <div>{{ $message }}</div>
    @enderror
    <h1>Kategória szerkesztése - {{ $category->name }}</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <input class="text-black" type="text" name="name" value="{{ old('name', $category->name) }}">
        <button type="submit">Mentés</button>
    </form>
@endsection
