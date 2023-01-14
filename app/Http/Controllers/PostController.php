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


    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('post', compact('posts'));
    }

    public function showmine()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();
    

        return view('my-posts', compact('user', 'posts'));

    }

    public function showall(Post $post)
    {
        $user = $post->user_id;
        $posts = Post::where('user_id', $user)->get();
    

        return view('user-posts', compact('user', 'posts'));

    }


    public function show(Post $post)
    {
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
            'title' => 'required | max:30',
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('edit-single-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required | max:30',
            'image' => 'required | image',
            'body' => 'required'
        ]);

        $postId = $post->id;
        $title = $request->input('title');
        $body = $request->input('body');

        $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');

        $post->title = $title;
        $post->body = $body;
        $post->imagePath = $imagePath;

        $post->save();

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/blog')->with('success', 'Post successfully deleted');
    }

    public function saveComment(Request $request, $id)
    {

        $user_id = Auth::user()->id;

        $body = $request->input('comment');

        $comment = new Comment();
        $comment->user_id = $user_id;
        $comment->post_id = $id;
        $comment->comment = $comment;

        $comment->save();
    }
}
