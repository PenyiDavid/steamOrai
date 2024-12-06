<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    function index(){
        $games=Game::all();
        return view('games', compact('games'));
    }
}
