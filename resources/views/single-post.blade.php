<!DOCTYPE html>
<html>
<head>
  <title>Rana's Recipes</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="{{ asset('singlepost.css') }}"/>>
  <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
</head>
<body>


<style>
  body {
    background-image: url("{{asset('fd.jpeg')}}");
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


  <main class="card">
    <section class="single-blog-post">
      <div class="header">
        <h1>{{$post->title}}</h1>
      </div>
      <p>
        Written By {{$post->user->name}}
      </p>
        <img src="{{asset($post->imagePath)}}" alt="" />
      </div>
      <p>
         {{$post->created_at->diffForHumans()}}
      </p>
        <h3> Description:</h3>
        {!!$post->body!!}
    </section>

<div class="commentscard">
  <h4> Comments </h4>
  <div class="comment-form">
    <form action="{{route('comment.store', $post->id)}}" method ="POST" enctype="multipart/form-data">
      @csrf
      <label for="comment"></label>
            <textarea id="comment" name="comment">{{ old('comment') }}</textarea>
            @error('comment')
                <p style="color: red">{{$message}}</p>
            @enderror
      <input type="submit" value="Submit" />
    </form>
  </div>

</div>
