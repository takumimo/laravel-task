<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all()->toArray();
        return array_reverse($posts);
    }
    public function create()
    {
        return view("posts.create");
    }
    public function store(Request $request)
    {
        $post = new Post([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);
        $post->save();

        return response()->json('投稿しました！');
    }
    public function show($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }
    public function edit($id)
    {
        $posts     = Post::where("id",$id)->get();
        $body    = [ "posts" => $posts ];

        return view("posts.edit",$body);
    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return response()->json('更新しました！');
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json('削除しました！');
    }
}
