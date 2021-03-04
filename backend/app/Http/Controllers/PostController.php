<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);

    }

    public function create()
    {
        
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $id = Auth::id();
        $post = new Post();
        
        $post->body = $request->body;
        $post->user_id = $id;

        $post->save();

       return redirect()->to('/posts');
    }

    public function show(Post $post)
    {
        $usr_id = $post->user_id;
        $user = DB::table('users')->where('id', $usr_id)->first();
        

        return view('posts.detail',['post' => $post,'user' => $user]);
    }

    public function edit($id)
    {
        // $usr_id = $post->user_id;
        $post = \App\Post::findOrFail($id);

        return view('posts.edit',['post' => $post]);
        // return view('posts.edit');
    }

    public function update(Request $request)
    {
        $id = $request->post_id;
        
        //レコードを検索
        $post = Post::findOrFail($id);
        
        $post->body = $request->body;
        
        //保存（更新）
        $post->save();
        
        return redirect()->to('/posts');
    }

    public function destroy($id)
    {
        $post = \App\Post::find($id);
        //削除
        $post->delete();

        return redirect()->to('/posts');
    }
}
