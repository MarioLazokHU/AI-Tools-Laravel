@extends('layout')
@section('content')
    <div class="flex text-black flex-col gap-5">
        <h1>Új bejegyzés</h1>
        <form action="/blogposts" method="POST">
            @csrf
            <div class="flex flex-col ">
                <label for="aitools_id"> Válassz egy AI Tool-t</label>
                <select name="aitools_id" id="aitools_id" required>
                    @foreach ($aitools as $aitool)
                        <option value="{{ $aitool->id }}">{{ $aitool->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col ">
                <label for="sender_name">Küldő neve:</label>
                <input type="text" name="sender_name" id="sender_name" required>
            </div>
            <div class="flex flex-col ">
                <label for="title">Cím:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="flex flex-col">
                <label for="content">Tartalom:</label>
                <textarea name="content" id="content" rows="5" required></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-slate-800 hover:bg-blue-700  text-white font-bold py-2 px-4 rounded-md">Mentés</button>
            </div>
        </form>
    </div>
@endsection