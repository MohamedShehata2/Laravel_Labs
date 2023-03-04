<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index()
    {
        //dd(Auth::id());
        $posts = Post::paginate();
        return view('posts.index', compact('posts'));;
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    function update($id, Request $request)
    {
        $post = Post::find($id);
        return view('posts.update', compact('post'));
    }

    function edit($id, Request $request)
    {
        //dd($id);
        // $post=Post::find($id);
        // $post->update($request->except('_token', '_method'));
        DB::table('posts')
            ->where('id', $id)
            ->update($request->except('_token', '_method'));
        return redirect()->route('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    ///lesaa
    function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        DB::table('posts')->insertGetId(
            ['title' => $request->title, 'content' => $request->content, 'user_id' => Auth::id()]
        );
        return redirect()->route('posts.index');
    }

    function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        //posts::where('id', $id)->delete();
        return redirect()->route('posts.index');
    }
}
