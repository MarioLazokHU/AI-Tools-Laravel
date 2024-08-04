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
<div class="flex flex-col gap-5">
    <h1>Blog</h1>
    <a class="bg-slate-800 p-3 rounded-md" href="{{route('blogposts.create')}}">Új bejegyzés</a>
    <div>
        @foreach ($blogposts as $blog)
            <div class="bg-slate-700 w-full p-5 rounded-md">
                <p class="mb-5 font-bold">Alkotó: {{$blog->sender_name}}</p>
                <h2 class="text-2xl font-bold">{{ $blog->title }}</h2>
                <p>{{ $blog->content }}</p>
                <p class="mt-5">Létrehozva {{ $blog->created_at }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
