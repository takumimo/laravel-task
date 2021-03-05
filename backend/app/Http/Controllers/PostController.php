<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts     = Post::latest()->get();
        $body    = [ "posts" => $posts ];

        return view("index",$body);
    }
    public function create()
    {
        return view("create");
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

        return view("show",$body);
    }
    public function edit($id)
    {
        $posts     = Post::where("id",$id)->get();
        $body    = [ "posts" => $posts ];

        return view("edit",$body);
    }
    public function update(Request $request, $id)
    {
        $post  = Post::find($id);
        $post->name    = $request->title;
        $post->content = $request->body;
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
