@extends(  'layout'  )
@section(  'content'  )
    @if ($errors->any())
        <div class="bg-red-500 text-white p-3 rounded-md">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="text-4xl font-bold mb-10">Bejelentkezés</h1>
    <form action="{{route('users.handleLogin')}}" method="POST">
        @csrf
        @method('POST')
        <div class="flex text-black flex-col gap-3">
            <label for="email">Email</label>
            <input class="p-2 rounded-md" type="email" name="email" id="email">
            <label for="password">Jelszó</label>
            <input class="p-2 rounded-md" type="password" name="password" id="password">
            <button class="bg-slate-800 p-3 text-white rounded-md" type="submit">Bejelentkezés</button>
        </div>
    </form>
@endsection