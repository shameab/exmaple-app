<!DOCTYPE html>
<html>
<head>
  <title>Rana's Recipes</title>
  <link rel="icon" type="image/x-icon" href={{ asset("favicon.ico") }}>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
</head>
<body>


<div class="topnavbar">
  <a href="/">Home</a>
  <a href="{{route('post.index')}}">Recipes</a>
  <a href="{{route('contact.index')}}">Contact</a>
  <a href="{{route('about.index')}}">About</a>
  <a href="login" class="split">Login</a>
  <a href="register" class="split">Register</a>
</div>

<style>
  body {
    background-image: url("{{asset('/images/recipesback2.jpeg')}}");
  }
</style>

<div class="header2">
  <h1>@yield('header')</h1>
</div>

<div>
    @yield('content');
</div>

<script>
        ClassicEditor
                                .create( document.querySelector( '#body' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
</script>

</body>

