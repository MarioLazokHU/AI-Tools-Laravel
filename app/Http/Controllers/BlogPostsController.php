<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogposts;
use App\Models\Aitools;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

class BlogPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogposts = Blogposts::all()->sortByDesc('created_at');
        return view('blogposts.index', compact('blogposts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $aitools = Aitools::all();
        $userName = User::find(Cookie::get('user'))->name;
        return view('blogposts.create', compact('aitools', 'userName'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3|max:255',
            'content' => 'required|string|min:3',
            'aitools_id' => 'required|exists:aitools,id',
        ]);
            Blogposts::create($request->all());

        return redirect()->route('blogposts.index')->with('success', 'Blogpost sikeresen létrehozva.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogposts = Blogposts::find($id);
        return view('blogposts.show', compact('blogposts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogposts = Blogposts::find($id);
        return view('blogposts.edit', compact('blogposts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|min:3|max:255',
            'content' => 'required|string|min:3',
            'aitools_id' => 'required|exists:aitools,id',
        ]);
        
        $blogposts = Blogposts::find($id);
        $blogposts->update($request->all());

        return redirect()->route('blogposts.index')->with('success', 'Blogpost sikeresen frissítve.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogposts = Blogposts::find($id);
        $blogposts->delete();

        return redirect()->route('blogposts.index')->with('success', 'Blogpost sikeresen törölve.');
    }
}
