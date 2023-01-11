<!DOCTYPE html>
<html>
<head>
  <title>Rana's Recipes</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="posts.css">
  <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
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

