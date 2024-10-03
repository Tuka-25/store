<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
  
    public function index()
    {
        $tags = Tag::all();
        return response()->json($tags);
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
          
        ]);

        $tag = Tag::create([
            'name' => $request->name,
           
        ]);

        return response()->json($tag, 201);
    }

   
    public function show($id)
    {
        $tag = Tag::find($id);
        if (!$tag) {
            return response()->json(['error' => 'Tag not found'], 404);
        }
        return response()->json($tag);
    }

 
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        if (!$tag) {
            return response()->json(['error' => 'Tag not found'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
        
        ]);

        $tag->update($request->only(['name']));
       
        $tag->save();

        return response()->json($tag);
    }

   
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return response()->json(['message' => 'Tag deleted successfully']);
    }
}
