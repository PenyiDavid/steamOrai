<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers', compact('publishers'));
    }

    public function create()
    {
        return view('publisher_tag');
    }

    public function store(Request $request)
    {
        $request->validate([
            'publisher_team'=>'required|string|max:255'
        ]);
        Publisher::create($request->all());
        return redirect()->back()->with('success','Publisher created');
    }
}
