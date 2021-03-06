<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{

    public function index ()
    {
        $tags = Tag::all();

        return view('tags.index', ['tags' => $tags]);
    }

    public function create ()
    {
        return view('tags.create', ['tags' => Tag::all()]);
    }

    public function store (Request $request)
    {
        $tag = Tag::create($this->tagValidate($request));

        return back()->with('message', 'Tag created succesfully');
    }

    public function edit (Tag $tag)
    {
        return view('tags.edit', ['tag' => $tag]);
    }

    public function update (Request $request, Tag $tag)
    {
        $tag = Tag::where('id', $tag->id)->update($this->tagValidate($request));
        // $this->tagValidate($request);
        // $tag = Tag::find($tag->id);
        // $tag->name = $request->name;
        // $tag->save();

        return back()->with('message', 'Tag updated succesfully');
    }

    public function destroy (Tag $tag)
    {
        $tag->delete();
        return back()->with('message', 'Tag deleted successfully');
    }

    public function tagValidate(Request $request)
    {
        $validatedEntries = $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        return $validatedEntries;
    }
}
