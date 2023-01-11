<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post', compact('posts'));
    }

    public function show($title) {
        $post = Post::where('title', $title) -> first();
        return view('single-post', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-new-post');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | max:255',
            'image' => 'required | image',
            'body' => 'required'
        ]); 
        $title = $request->input('title');
        $user_id = Auth::user()->id;
        $body = $request->input('body');

        $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');

        $post = new Post();
        $post->title = $title;
        $post->user_id = $user_id;
        $post->body = $body;
        $post->imagePath = $imagePath;

        $post->save();

        return redirect('/blog');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 /*   public function show($id)
    {
        // 
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function saveComment(Request $request, $id) {

        $user_id = Auth::user()->id;

        $body = $request->input('comment');
        
        $comment = new Comment();
        $comment -> user_id =$user_id;
        $comment -> post_id = $id;
        $comment-> comment = $comment;

        $comment->save();
        

        

    }
}


