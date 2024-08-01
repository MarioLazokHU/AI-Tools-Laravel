<?php

namespace App\Http\Controllers;

use App\Models\Aitools;
use Illuminate\Http\Request;
use App\Models\Category;

class AitoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aitools = Aitools::all();
        return view('aitools.index', compact('aitools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('aitools.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hasFreePlan = $request->has('hasFreePlan');
        if($hasFreePlan){
            $request->merge(['hasFreePlan' => true]);
        }

        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string|min:3',
            'link' => 'required|string',
            'hasFreePlan' => 'boolean',
            'price' => 'nullable|numeric'
        ]);
        
        Aitools::create($request->all());

        return redirect()->route('aitools.index')->with('success', 'Ai Tool sikeresen létrehozva.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
