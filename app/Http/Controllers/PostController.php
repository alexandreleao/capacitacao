<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    public function lista()
    {
        $post = Post::paginate(15);
        return response()->Json($post);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->Json($post);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $post = new Post;
        $post->name = $request->input('name');

        if(!$post->save() ){
            return response()->json(['message' => 'Impossível cadastrar postagem!']);
        }
        return response()->json($post);
    }
}
