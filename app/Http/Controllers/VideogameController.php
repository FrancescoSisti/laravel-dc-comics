<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogames = Videogame::all();
        return view('videogames.videogames', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videogames.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'publisher' => 'required',
            'developer' => 'required',
            'release_date' => 'required|date',
            'genre' => 'required',
            'platform' => 'required',
            'price' => 'required|numeric',
            'rating' => 'nullable|integer',
            'cover_image' => 'nullable|url',
            'multiplayer' => 'boolean',
            'max_players' => 'nullable|integer',
            'language' => 'required',
            'age_rating' => 'required',
            'storage_required' => 'required|integer'
        ]);

        $videogame = Videogame::create($data);
        return redirect()->route('videogames.index')->with('success', 'Videogame created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        return view('videogames.show', compact('videogame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        return view('videogames.edit', compact('videogame'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'publisher' => 'required',
            'developer' => 'required',
            'release_date' => 'required|date',
            'genre' => 'required',
            'platform' => 'required',
            'price' => 'required|numeric',
            'rating' => 'nullable|integer',
            'cover_image' => 'nullable|url',
            'multiplayer' => 'boolean',
            'max_players' => 'nullable|integer',
            'language' => 'required',
            'age_rating' => 'required',
            'storage_required' => 'required|integer'
        ]);

        $videogame->update($data);
        return redirect()->route('videogames.index')->with('success', 'Videogame updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->delete();
        return redirect()->route('videogames.index')->with('success', 'Videogame deleted successfully');
    }
}
