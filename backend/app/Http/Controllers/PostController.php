<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts     = Post::latest()->get();
        $body    = [ "posts" => $posts ];

        return view("posts.index",$body);
    }
    public function create()
    {
        return view("posts.create");
    }
    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect(route("posts.index"));
    }
    public function show($id)
    {
        $posts     = Post::where("id",$id)->get();
        $body    = [ "posts" => $posts ];

        return view("posts.show",$body);
    }
    public function edit($id)
    {
        $posts     = Post::where("id",$id)->get();
        $body    = [ "posts" => $posts ];

        return view("posts.edit",$body);
    }
    public function update(Request $request, $id)
    {
        $post  = Post::find($id);
        $post->title    = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect(route("posts.index"));
    }
    public function destroy($id)
    {
        $post  = Post::find($id);
        $post->delete();

        return redirect(route("posts.index"));
    }
}
