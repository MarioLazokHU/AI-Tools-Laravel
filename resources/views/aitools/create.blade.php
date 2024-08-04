@extends('layout')
@section('content')
    <h1 class="text-4xl font-bold mb-10">Ai Toolok</h1>
    <form action="{{route('aitools.store')}}" method="post">
        @csrf
        <div class="flex text-black flex-col gap-3">
            <label for="name">Név</label>
            <input class="p-2 rounded-md" type="text" name="name" id="name">
            <label for="description">Leírás</label>
            <textarea class="p-2 rounded-md" name="description" id="description" cols="30" rows="10"></textarea>
            <label for="link">Link</label>
            <input class="p-2 rounded-md" type="text" name="link" id="link">
            <label for="price">Ár</label>
            <input class="p-2 rounded-md" type="number" name="price" id="price" >
            <label for="category_id">Kategória</label>
            <select class="p-2 rounded-md" name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <button class="bg-slate-800 p-3 text-white rounded-md" type="submit">Mentés</button>
        </div>
    </form>
    <a class="bg-slate-800 p-3 mt-5 rounded-md" href="{{route('aitools.index')}}">Visszalépés</a>
@endsection