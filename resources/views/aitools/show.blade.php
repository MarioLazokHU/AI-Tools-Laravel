@extends('layout')
@section('content')
<div class="flex flex-col gap-5">
<h1 class="text-3xl font-bold">Név: {{ $aitools->name }}</h1>
    <div class="flex flex-col gap-3">
        <p>Leírás: {{ $aitools->description }}</p>
        <p>Link: {{ $aitools->link }}</p>
        <p>Ár: {{$aitools->price ? $aitools->price.' Ft' : 'ingyenes'}}</p>
        <p>Kategória: {{$aitools->category->name}}</p>
    </div>
    <a class="bg-slate-800 p-3 rounded-md" href="{{route('aitools.index')}}">Visszalépés</a>
</div>
@endsection
