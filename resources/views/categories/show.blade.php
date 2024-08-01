@extends('layout')
@section('content')
    <div>
        <h1>Kategória: {{ $category->name }}</h1>
        <p>Azonosító: {{ $category->id }}</p>
        <p>Létrehozva: {{ $category->created_at }}</p>
    </div>
@endsection
