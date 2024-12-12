<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tags=Tag::all();
        return view('tags', compact('tags'));
    }

    public function create(){
        return view('create_tag');
    }

    public function store(Request $request){
        $request->validate([
            'tag_name' => 'required|string|max:255'
        ]);

        Tag::create($request->all());
        return redirect()->back()->with('success', 'Tag created');
    }
}
