<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index(){
        $tags=Tag::all();
        return view('tags', compact('tags'));
    }
}
