<!DOCTYPE html>
<html>

<head>
    <title>Rana's Recipes</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>


    <style>
        body {
            background-image: url("{{ asset('/images/foodback1.jpeg') }}");
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

    <div class="welcomeheader">
        <h1>Rana's Recipes</h1>
    </div>

</body>

</html>
