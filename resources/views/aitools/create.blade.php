@extends('layout')
@section('content')
    <h1>Új AI Tool</h1>

 @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>            
        @endforeach     
 @endif

    <form class="flex text-black flex-col gap-3" action="{{ route('aitools.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="AI Tool neve">
        <div>
            Kategória:
            <select class="text-black" name="category_id" id="">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <input type="text" name="description" placeholder="Leírás">
        <input type="text" name="link" placeholder="Link">
        <label for="hasFreePlan">Ingyenes?
            <input type="checkbox" name="hasFreePlan">
        </label>
        <input type="number" name="price" placeholder="Ár">
        <button class="bg-slate-700 text-white rounded-md p-2" type="submit">Mentés</button>
    </form>
@endsection
