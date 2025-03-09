<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Song::with('artists')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Song::with('artists')->findOrFail($id));
    }

    /**
     * Incrementa gli ascolti di una canzone 
     */
    public function incrementPlayCount($id)
    {
        $song = Song::findOrFail($id);
        $song->increment('play_count');
        return response()->json(['message' => 'Play count incremented', 'play_count' => $song->play_count]);
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
