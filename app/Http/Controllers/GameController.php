<?php

namespace App\Http\Controllers;
use App\Models\Game;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Models\Tag;

class GameController extends Controller
{
    function index(){
        $games=Game::all();
        return view('games', compact('games'));
    }

    public function create()
    {
        $publishers = Publisher::all();
        $tags = Tag::all();
        return view('game_create', compact('publishers', 'tags'));
    }

    public function store(Request $request){
        $request->validate
        (
            [
               'game_name' => 'required|string|max:255', 
               'release_date' => 'required|date', 
               'rating' => 'required|integer|min:0|max:10', 
               'price' => 'required|integer|min:0', 
               'picture_path' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
               'description' => 'nullable|string',
               'publisher' => 'required|exists:publishers,id',
               'tags' => 'nullable|array',
               'tags.*' => 'exists:tags,id',
            ]
        );

        $path = $request->file('picture')->store('games', 'public'); 
    }
}
