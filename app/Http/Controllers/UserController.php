<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function login()
    {
        return view('users.login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:255'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Cookie::queue('user', $user->id, 60);
            return redirect()->route('aitools.index')->with('success', 'Sikeres bejelentkezés');
        } else {
            return back()->with('error', 'Nem megfelelő adatok');
        }
    }

    public function logout()
    {
        Cookie::queue(Cookie::forget('user'));
        return redirect()->route('aitools.index')->with('success', 'Sikeres kijelentkezés');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
        User::create($request->all());
        return redirect()->route('users.login')->with('success', 'Sikeres regisztráció. Kérlek jelentkezz be!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $userId = Cookie::get('user');
        $user = User::find($userId);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->password) {
            $request->validate([
                'name' => 'min:3|max:255',
                'email' => 'email',
                'password' => 'min:8|max:255'
            ]);
            $request['password'] = Hash::make($request->password);
        } else {
            $request->validate([
                'name' => 'min:3|max:255',
                'email' => 'email'
            ]);
        }
        User::find($id)->update($request->all());
        return redirect()->route('users.show')->with('success', 'Sikeres módosítás');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return User::destroy($id);
    }
}
