@extends('layout')
@section('content')
@if (session('success'))
<div class="bg-orange-200 text-black p-5 rounded-lg shadow-lg">
    {{ session('success') }}
</div>
@endif
    <div class="flex flex-col gap-5">
        <h1>Blog</h1>
        <a class="bg-slate-800 p-3 rounded-md" href="{{route('blogposts.create')}}">Új bejegyzés</a>
        <div>
            @foreach ($blogposts as $blog)
                <div class="bg-slate-700 shadow-lg mb-5 w-full p-5 rounded-md">
                    <p class="mb-5 text-2xl font-bold">Ai Tool: {{$blog->aitools->name}}</p>
                    <p class="mb-5 font-bold">Alkotó: {{$blog->sender_name}}</p>
                    <h2 class="text-2xl font-bold">{{ $blog->title }}</h2>
                    <p>{{ $blog->content }}</p>
                    <p class="mt-5">Létrehozva {{ $blog->created_at }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection