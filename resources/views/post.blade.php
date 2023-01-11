<!DOCTYPE html>
<html>
<head>
  <title>Rana's Recipes</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="posts.css">
</head>
<body>


<style>
  body {
    background-image: url('recipesback2.jpeg');
  }
</style>

<div class="topnavbar">
    <a href="/">Home</a>
    <a href="blog">Recipes</a>
    <a href="contact">Contact</a>
    <a href="about">About</a>
    <a href="login" class="split">Login</a>
    <a href="register" class="split">Register</a>
  </div>


<div class="header">
  <h1>Recipes Blog</h1>
</div>


@foreach ($posts as $post)
<div class="column">
    <div class="row">
            <div class="card">
                <h1>
                <img src="{{asset($post->imagePath)}}" alt="" />
                </h1>
                <h2>
                    <a href="{{route('post.show', $post)}}"> {{$post->title}}</a>
                </h2>
                <h4>
                    Posted by: {{$post-> user->name}}
                </h4>
                <h4>
                    {{$post->created_at->diffForHumans()}}
                </h4>
                <p>Some text..</p>
            </div>
    </div>
</div>
@endforeach
